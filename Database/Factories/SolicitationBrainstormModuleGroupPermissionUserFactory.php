<?php
namespace Modules\Solicitation\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\Base\Factories\BaseFactory;
use Modules\Solicitation\Entities\SolicitationBrainstormModuleGroupPermissionUser\SolicitationGroupUserPermissionEnum;
use Modules\Solicitation\Models\SolicitationBrainstormModuleGroupPermissionUserModel;
use Modules\Solicitation\Entities\SolicitationBrainstormModuleGroupPermissionUser\SolicitationBrainstormModuleGroupPermissionUserEntityModel;

/**
 * @method SolicitationBrainstormModuleGroupPermissionUserModel create(array $attributes = [])
 * @method SolicitationBrainstormModuleGroupPermissionUserModel make(array $attributes = [])
 */
class SolicitationBrainstormModuleGroupPermissionUserFactory extends BaseFactory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = SolicitationBrainstormModuleGroupPermissionUserModel::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        $p = SolicitationBrainstormModuleGroupPermissionUserEntityModel::props(null, true);
        return [
            $p->group_id => null,
            $p->user_id => null,
            $p->type => collect(SolicitationGroupUserPermissionEnum::toArray())->random(),
        ];
    }
}
