<?php
namespace Modules\Solicitation\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\Solicitation\Models\SolicitationModuleUserPermissionModel;
use Modules\Solicitation\Entities\SolicitationModuleUserPermission\SolicitationModuleUserPermissionEntityModel;

/**
 * @method SolicitationModuleUserPermissionModel create(array $attributes = [])
 * @method SolicitationModuleUserPermissionModel make(array $attributes = [])
 */
class SolicitationModuleUserPermissionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = SolicitationModuleUserPermissionModel::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        $p = SolicitationModuleUserPermissionEntityModel::props(null, true);
        return [

        ];
    }
}
