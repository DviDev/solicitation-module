<?php
namespace Modules\Solicitation\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\Solicitation\Models\SolicitationGroupPermissionModel;
use Modules\Solicitation\Entities\SolicitationGroupPermission\SolicitationGroupPermissionEntityModel;

/**
 * @method SolicitationGroupPermissionModel create(array $attributes = [])
 * @method SolicitationGroupPermissionModel make(array $attributes = [])
 */
class SolicitationGroupPermissionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = SolicitationGroupPermissionModel::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        $p = SolicitationGroupPermissionEntityModel::props(null, true);
        return [

        ];
    }
}
