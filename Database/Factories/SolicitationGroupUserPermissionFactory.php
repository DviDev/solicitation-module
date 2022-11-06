<?php
namespace Modules\Solicitation\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\Solicitation\Models\SolicitationGroupUserPermissionModel;
use Modules\Solicitation\Entities\SolicitationGroupUserPermission\SolicitationGroupUserPermissionEntityModel;

/**
 * @method SolicitationGroupUserPermissionModel create(array $attributes = [])
 * @method SolicitationGroupUserPermissionModel make(array $attributes = [])
 */
class SolicitationGroupUserPermissionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = SolicitationGroupUserPermissionModel::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        $p = SolicitationGroupUserPermissionEntityModel::props(null, true);
        return [

        ];
    }
}
