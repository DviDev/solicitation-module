<?php
namespace Modules\Solicitation\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\Solicitation\Models\SolicitationModuleModel;
use Modules\Solicitation\Entities\SolicitationModule\SolicitationModuleEntityModel;

/**
 * @method SolicitationModuleModel create(array $attributes = [])
 * @method SolicitationModuleModel make(array $attributes = [])
 */
class SolicitationModuleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = SolicitationModuleModel::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        $p = SolicitationModuleEntityModel::props(null, true);
        return [
            $p->name => $this->faker->name(),
            $p->description => $this->faker->sentence(),
            $p->brainstorm_id => null,
            $p->parent_id => collect([null, SolicitationModuleModel::query()->inRandomOrder()->first()->id ?? null])
                ->random(),
        ];
    }
}
