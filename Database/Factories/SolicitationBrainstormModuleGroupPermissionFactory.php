<?php
namespace Modules\Solicitation\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\Solicitation\Models\SolicitationBrainstormModuleGroupPermissionModel;
use Modules\Solicitation\Entities\SolicitationBrainstormModuleGroupPermission\SolicitationBrainstormModuleGroupPermissionEntityModel;

/**
 * @method SolicitationBrainstormModuleGroupPermissionModel create(array $attributes = [])
 * @method SolicitationBrainstormModuleGroupPermissionModel make(array $attributes = [])
 */
class SolicitationBrainstormModuleGroupPermissionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = SolicitationBrainstormModuleGroupPermissionModel::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        $p = SolicitationBrainstormModuleGroupPermissionEntityModel::props(null, true);
        return [

        ];
    }
}
