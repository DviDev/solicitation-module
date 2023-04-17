<?php
namespace Modules\Solicitation\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\Solicitation\Models\SolicitationBrainstormModuleModel;
use Modules\Solicitation\Entities\SolicitationBrainstormModule\SolicitationBrainstormModuleEntityModel;

/**
 * @method SolicitationBrainstormModuleModel create(array $attributes = [])
 * @method SolicitationBrainstormModuleModel make(array $attributes = [])
 */
class SolicitationBrainstormModuleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = SolicitationBrainstormModuleModel::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        $p = SolicitationBrainstormModuleEntityModel::props(null, true);
        return [
            $p->name => $this->faker->name(),
            $p->description => $this->faker->sentence(),
            $p->brainstorm_id => null,
            $p->parent_id => collect([null, SolicitationBrainstormModuleModel::query()->inRandomOrder()->first()->id ?? null])
                ->random(),
        ];
    }
}
