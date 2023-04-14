<?php

namespace Modules\Solicitation\Database\Seeders;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use Modules\Project\Models\ProjectModel;
use Modules\Solicitation\Entities\SolicitationCommentVote\SolicitationCommentVoteEntityModel;
use Modules\Solicitation\Entities\SolicitationGroupUserPermission\SolicitationGroupUserPermissionEntityModel;
use Modules\Solicitation\Entities\SolicitationGroupUserPermission\SolicitationGroupUserPermissionEnum;
use Modules\Solicitation\Models\SolicitationBrainstormModel;
use Modules\Solicitation\Models\SolicitationCommentModel;
use Modules\Solicitation\Models\SolicitationCommentVoteModel;
use Modules\Solicitation\Models\SolicitationGroupModel;
use Modules\Solicitation\Models\SolicitationGroupUserPermissionModel;
use Modules\Solicitation\Models\SolicitationModel;
use Modules\Solicitation\Models\SolicitationModuleModel;
use Modules\Solicitation\Models\SolicitationTaskModel;
use Modules\Task\Database\Seeders\TaskTableSeeder;
use Modules\Task\Models\TaskModel;
use Modules\Workspace\Models\WorkspaceModel;

class SolicitationDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $me = User::find(1);
        $me->workspaces->each(function (WorkspaceModel $workspace) {
            $workspace->participants->each(function (User $user) use ($workspace) {
                $this->createBrainstorm($user, $workspace);
            });
        });
    }

    function createBrainstorm(User $user, WorkspaceModel $workspace): void
    {
        $seed_total = config('app.SEED_MODULE_COUNT');
        $seeded = 0;
        SolicitationBrainstormModel::factory()
            ->afterCreating(function (SolicitationBrainstormModel $brainstorm) use (
                $user, $workspace, $seed_total,
                &$seeded
            ) {
                $seeded++;
                ds("brainstorm $seeded / $seed_total");

                $this->createModule($brainstorm, $user, $workspace);
            })
            ->count($seed_total)->for($user, 'user')->create();
    }

    function createModule(SolicitationBrainstormModel $brainstorm, User $user, WorkspaceModel $workspace): void
    {
        $seed_total = config('app.SEED_MODULE_COUNT');
        $seeded = 0;
        SolicitationModuleModel::factory()
            ->count($seed_total)
            ->for($brainstorm, 'brainstorm')
            ->afterCreating(function (SolicitationModuleModel $module) use (
                $brainstorm, $user, $workspace, $seed_total, &$seeded
            ) {
                $seeded++;
                ds("brainstorm $brainstorm->id module $seeded / $seed_total");

                $this->createSolicitation($module, $user);

                $this->createSolicitationGroup($module, $workspace);
            })
            ->create();
    }

    function createSolicitation(SolicitationModuleModel $module, User $user): void
    {
        $seed_total = config('app.SEED_MODULE_COUNT');
        $seeded = 0;
        SolicitationModel::factory()->count($seed_total)
            ->for(User::query()->first(), 'solicitant')
            ->for($module, 'module')
            ->afterCreating(function (SolicitationModel $solicitation) use ($user, $seed_total, &$seeded) {
                $seeded++;
                ds("module $solicitation->module_id solicitation $seeded / $seed_total");

                $this->createTask($user, $solicitation);

                $this->createComments($solicitation);
            })
            ->create();
    }

    function createTask(User $user, SolicitationModel $solicitation): void
    {
        $project = ProjectModel::query()->first();

        (new TaskTableSeeder())->run($user, $project, $project->workspaces()->first());

        $project->tasks->each(function (TaskModel $task) use ($solicitation) {
            SolicitationTaskModel::factory()
                ->for($solicitation, 'solicitation')
                ->for($task, 'task')
                ->afterCreating(fn() => ds("project $task->project_id solicitation $solicitation->id task $task->id"))
                ->create();
        });
    }

    function createComments(SolicitationModel $solicitation): void
    {
        User::query()->each(function (User $user) use ($solicitation) {
            $seed_total = config('app.SEED_MODULE_COUNT');
            $seeded = 0;
            SolicitationCommentModel::factory()
                ->count($seed_total)
                ->for($solicitation, 'solicitation')
                ->for($user, 'user')
                ->afterCreating(function (SolicitationCommentModel $comment) use (
                    $solicitation, $user, $seed_total, &$seeded) {
                    $seeded++;
                    ds("solicitation $solicitation->id user $user->id comment $seeded / $seed_total");

                    $this->createCommentVotes($comment);
                })
                ->create();
        });
    }

    function createCommentVotes(SolicitationCommentModel $comment): void
    {
        User::query()->each(function (User $user) use ($comment) {
            $p = SolicitationCommentVoteEntityModel::props();
            $fnUpVote = fn(Factory $factory) => $factory->create([$p->up_vote => 1]);
            $fnDownVote = fn(Factory $factory) => $factory->create([$p->down_vote => 1]);

            $factory = SolicitationCommentVoteModel::factory()
                ->for($comment, 'comment')->for($user, 'user');

            $choice = collect([$fnUpVote, $fnDownVote])->random();

            /**@var \Closure $choice */
            $choice($factory);
        });
    }

    function createSolicitationGroup(SolicitationModuleModel $module, WorkspaceModel $workspace): void
    {
        $seed_total = config('app.SEED_MODULE_COUNT');
        $seeded = 0;
        SolicitationGroupModel::factory()
            ->count($seed_total)
            ->for($module, 'module')
            ->afterCreating(function (SolicitationGroupModel $group) use ($workspace, $seed_total, &$seeded) {
                $seeded++;
                ds("module $group->module_id group $seeded / $seed_total");

                $this->createGroupUserPermission($workspace, $group);
            })
            ->create();
    }

    function createGroupUserPermission(WorkspaceModel $workspace, SolicitationGroupModel $group): void
    {
        $workspace->participants->each(function (User $user) use ($group) {
            $p = SolicitationGroupUserPermissionEntityModel::props();
            $sequence = collect(SolicitationGroupUserPermissionEnum::toArray())
                ->map(fn($i) => [$p->type => $i]);

            $seed_total = count(SolicitationGroupUserPermissionEnum::toArray());
            $seeded = 0;
            SolicitationGroupUserPermissionModel::factory()
                ->count($seed_total)
                ->for($group, 'group')
                ->for($user, 'user')
                ->sequence(...$sequence)
                ->afterCreating(function(SolicitationGroupUserPermissionModel $m) use ($user, $seed_total, &$seeded) {
                    $seeded++;
                    ds("group $m->group_id user-permission user $user->id $seeded / $seed_total");
                })
                ->create();
        });
    }
}
