<?php
namespace Modules\Solicitation\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\Solicitation\Models\SolicitationGroupModel;
use Modules\Solicitation\Entities\SolicitationGroup\SolicitationGroupEntityModel;

/**
 * @method SolicitationGroupModel create(array $attributes = [])
 * @method SolicitationGroupModel make(array $attributes = [])
 */
class SolicitationGroupFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = SolicitationGroupModel::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        $p = SolicitationGroupEntityModel::props(null, true);
        return [
            $p->module_id => null,
            $p->name => $this->faker->sentence(2),
            $p->description => $this->faker->sentence(),
        ];
    }
}
