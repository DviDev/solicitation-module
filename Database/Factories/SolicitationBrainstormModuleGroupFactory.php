<?php
namespace Modules\Solicitation\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\Base\Factories\BaseFactory;
use Modules\Solicitation\Models\SolicitationBrainstormModuleGroupModel;
use Modules\Solicitation\Entities\SolicitationBrainstormModuleGroup\SolicitationBrainstormModuleGroupEntityModel;

/**
 * @method SolicitationBrainstormModuleGroupModel create(array $attributes = [])
 * @method SolicitationBrainstormModuleGroupModel make(array $attributes = [])
 */
class SolicitationBrainstormModuleGroupFactory extends BaseFactory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = SolicitationBrainstormModuleGroupModel::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        $p = SolicitationBrainstormModuleGroupEntityModel::props(null, true);
        return [
            $p->module_id => null,
            $p->name => $this->faker->sentence(2),
            $p->description => $this->faker->sentence(),
        ];
    }
}
