<?php

namespace Modules\Solicitation\Database\Seeders;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Modules\Base\Database\Seeders\BaseSeeder;
use Modules\Base\Database\Seeders\SeederEventDTO;
use Modules\Project\Events\ProjectTaskCreatedEvent;
use Modules\Project\Models\ProjectModel;
use Modules\Solicitation\Entities\SolicitationBrainstormModuleGroupPermissionUser\SolicitationBrainstormModuleGroupPermissionUserEntityModel;
use Modules\Solicitation\Entities\SolicitationBrainstormModuleGroupPermissionUser\SolicitationGroupUserPermissionEnum;
use Modules\Solicitation\Models\SolicitationBrainstormModel;
use Modules\Solicitation\Models\SolicitationBrainstormModuleGroupModel;
use Modules\Solicitation\Models\SolicitationBrainstormModuleGroupPermissionUserModel;
use Modules\Solicitation\Models\SolicitationBrainstormModuleModel;
use Modules\Solicitation\Models\SolicitationBrainstormModuleRequestModel;
use Modules\Solicitation\Models\SolicitationBrainstormModuleRequestTaskModel;
use Modules\Task\Database\Seeders\TaskTableSeeder;
use Modules\Task\Models\TaskModel;
use Modules\Workspace\Models\WorkspaceModel;

class SolicitationDatabaseSeeder extends BaseSeeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->seeding();

        Model::unguard();

        $me = User::find(1);
        $workspaces = WorkspaceModel::byUserId($me->id)->with('participants')->get();
        $workspaces->each(function (WorkspaceModel $workspace) {
            $workspace->projects()->with('user')->each(function (ProjectModel $project) use ($workspace) {
                $this->createBrainstorm($project, $workspace);
            });
        });

        $this->done();
    }

    public function createBrainstorm(ProjectModel $project, WorkspaceModel $workspace): void
    {
        $seed_total = config('solicitation.SEED_COUNT');
        SolicitationBrainstormModel::factory()
            ->afterCreating(function (SolicitationBrainstormModel $brainstorm) use ($workspace) {
                $this->createModule($brainstorm, $workspace);
            })
            ->count($seed_total)
            ->for($project->user, 'user')
            ->for($project, 'project')
            ->create();
    }

    public function createModule(SolicitationBrainstormModel $brainstorm, WorkspaceModel $workspace): void
    {
        $seed_total = config('solicitation.SEED_COUNT');
        SolicitationBrainstormModuleModel::factory()
            ->count($seed_total)
            ->for($brainstorm, 'brainstorm')
            ->afterCreating(function (SolicitationBrainstormModuleModel $module) use ($brainstorm, $workspace) {
                $this->createSolicitation($module, $brainstorm->user);

                $this->createSolicitationGroup($module, $workspace);
            })
            ->create();
    }

    public function createSolicitation(SolicitationBrainstormModuleModel $module, User $user): void
    {
        $seed_total = config('solicitation.SEED_COUNT');
        SolicitationBrainstormModuleRequestModel::factory()->count($seed_total)
            ->for(User::query()->find(1), 'solicitant')
            ->for($module, 'module')
            ->afterCreating(function (SolicitationBrainstormModuleRequestModel $solicitation) use ($user) {
                $this->createTask($user, $solicitation);
            })
            ->create();
    }

    public function createTask(User $user, SolicitationBrainstormModuleRequestModel $solicitation): void
    {
        $project = $solicitation->module->brainstorm->project;
        $this->call(TaskTableSeeder::class, parameters: [
            'user' => $user,
            'project' => $project,
            'workspace' => $project->workspaces()->first(),
            'event' => SeederEventDTO::event(ProjectTaskCreatedEvent::class)->param('project', $project),
        ]);

        $project->tasks->each(function (TaskModel $task) use ($solicitation) {
            SolicitationBrainstormModuleRequestTaskModel::factory()
                ->for($solicitation, 'solicitation')
                ->for($task, 'task')
                ->create();
        });
    }

    public function createSolicitationGroup(SolicitationBrainstormModuleModel $module, WorkspaceModel $workspace): void
    {
        $seed_total = config('solicitation.SEED_COUNT');
        SolicitationBrainstormModuleGroupModel::factory()
            ->count($seed_total)
            ->for($module, 'module')
            ->afterCreating(function (SolicitationBrainstormModuleGroupModel $group) use ($workspace) {
                $this->createGroupUserPermission($workspace, $group);
            })
            ->create();
    }

    public function createGroupUserPermission(WorkspaceModel $workspace, SolicitationBrainstormModuleGroupModel $group): void
    {
        $workspace->participants->each(function (User $user) use ($group) {
            $p = SolicitationBrainstormModuleGroupPermissionUserEntityModel::props();
            $sequence = collect(SolicitationGroupUserPermissionEnum::toArray())
                ->map(fn ($i) => [$p->type => $i]);

            $seed_total = count(SolicitationGroupUserPermissionEnum::toArray());
            SolicitationBrainstormModuleGroupPermissionUserModel::factory()
                ->count($seed_total)
                ->for($group, 'group')
                ->for($user, 'user')
                ->sequence(...$sequence)
                ->create();
        });
    }

    public function createCommentVotes($comment): void
    {
        /** @var WorkspaceModel $workspace */
        $workspace = WorkspaceModel::byUserId(1)->first();
        $workspace->participants()->each(function (User $user) {
            //            $fnUpVote = fn(Factory $factory) => $factory->create([$p->up_vote => 1]);
            //            $fnDownVote = fn(Factory $factory) => $factory->create([$p->down_vote => 1]);
            //
            //            $factory = ::factory()
            //                ->for($comment, 'comment')->for($user, 'user');
            //
            //            $choice = collect([$fnUpVote, $fnDownVote])->random();
            //
            //            /**@var \Closure $choice */
            //            $choice($factory);
        });
    }
}
