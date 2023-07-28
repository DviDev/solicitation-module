<?php
namespace Modules\Solicitation\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\Base\Factories\BaseFactory;
use Modules\Solicitation\Models\SolicitationBrainstormModuleUserPermissionModel;
use Modules\Solicitation\Entities\SolicitationBrainstormModuleUserPermission\SolicitationBrainstormModuleUserPermissionEntityModel;

/**
 * @method SolicitationBrainstormModuleUserPermissionModel create(array $attributes = [])
 * @method SolicitationBrainstormModuleUserPermissionModel make(array $attributes = [])
 */
class SolicitationBrainstormModuleUserPermissionFactory extends BaseFactory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = SolicitationBrainstormModuleUserPermissionModel::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        $p = SolicitationBrainstormModuleUserPermissionEntityModel::props(null, true);
        return [

        ];
    }
}
