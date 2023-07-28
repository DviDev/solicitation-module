<?php
namespace Modules\Solicitation\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\Base\Factories\BaseFactory;
use Modules\Solicitation\Models\SolicitationBrainstormModuleRequestFileModel;
use Modules\Solicitation\Entities\SolicitationBrainstormModuleRequestFile\SolicitationBrainstormModuleRequestFileEntityModel;

/**
 * @method SolicitationBrainstormModuleRequestFileModel create(array $attributes = [])
 * @method SolicitationBrainstormModuleRequestFileModel make(array $attributes = [])
 */
class SolicitationBrainstormModuleRequestFileFactory extends BaseFactory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = SolicitationBrainstormModuleRequestFileModel::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        $p = SolicitationBrainstormModuleRequestFileEntityModel::props(null, true);
        return [

        ];
    }
}
