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
use Modules\Task\Entities\Task\TaskEntityModel;
use Modules\Task\Models\TaskModel;

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

        User::query()->each(function (User $user) {
            SolicitationBrainstormModel::factory()->count(11)->for($user, 'user')->create()
                ->each(function (SolicitationBrainstormModel $brainstorm) use ($user) {
                    SolicitationModuleModel::factory()->count(11)
                        ->for($brainstorm, 'brainstorm')
                        ->create()
                        ->each(function (SolicitationModuleModel $module) use ($user) {
                            SolicitationModel::factory()->count(11)
                                ->for(User::query()->first(), 'solicitant')
                                ->for($module, 'module')
                                ->create()->each(function (SolicitationModel $solicitation) use ($user) {
                                    $project = ProjectModel::query()->first();

                                    (new TaskTableSeeder())->run($user, $project)
                                        ->each(function (TaskModel $task) use ($solicitation) {
                                            SolicitationTaskModel::factory()
                                                ->for($solicitation, 'solicitation')
                                                ->for($task, 'task')
                                                ->create();
                                        });

                                    User::query()->each(function (User $user) use ($solicitation) {
                                        SolicitationCommentModel::factory()->count(11)
                                            ->for($solicitation, 'solicitation')
                                            ->for($user, 'user')
                                            ->create()->each(function (SolicitationCommentModel $comment) use ($user) {
                                                User::query()->each(function (User $user) use ($comment) {
                                                    $p = SolicitationCommentVoteEntityModel::props();
                                                    $fnUpVote = fn(Factory $factory) => $factory->create([$p->up_vote => 1]);
                                                    $fnDownVote = fn(Factory $factory) => $factory->create([$p->down_vote => 1]);

                                                    $factory = SolicitationCommentVoteModel::factory()
                                                        ->for($comment, 'comment')->for($user, 'user');
                                                    $choice = collect([$fnUpVote, $fnDownVote])->random();

                                                    $choice($factory);
                                                });
                                            });

                                    });

                                });

                            SolicitationGroupModel::factory()->count(11)->for($module, 'module')->create()
                                ->each(function (SolicitationGroupModel $group) {
                                    User::query()->each(function (User $user) use ($group) {
                                        $p = SolicitationGroupUserPermissionEntityModel::props();
                                        $sequence = collect(SolicitationGroupUserPermissionEnum::toArray())
                                            ->map(fn ($i) => [$p->type => $i]);
                                        SolicitationGroupUserPermissionModel::factory()
                                            ->count(count(SolicitationGroupUserPermissionEnum::toArray()))
                                            ->for($group, 'group')
                                            ->for($user, 'user')
                                            ->sequence(...$sequence)
                                            ->create();
                                    });
                                });
                        });
                });
        });

    }
}
