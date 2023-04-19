<?php
namespace Modules\Solicitation\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\Solicitation\Models\SolicitationBrainstormModuleRequestCommentModel;
use Modules\Solicitation\Entities\SolicitationBrainstormModuleRequestComment\SolicitationBrainstormModuleRequestCommentEntityModel;

/**
 * @method SolicitationBrainstormModuleRequestCommentModel create(array $attributes = [])
 * @method SolicitationBrainstormModuleRequestCommentModel make(array $attributes = [])
 */
class SolicitationBrainstormModuleRequestCommentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = SolicitationBrainstormModuleRequestCommentModel::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        $p = SolicitationBrainstormModuleRequestCommentEntityModel::props(null, true);
        return [
            $p->solicitation_id => null,
            $p->user_id => null,
            $p->parent_id => collect([null, SolicitationBrainstormModuleRequestCommentModel::query()->inRandomOrder()->first()->id ??
                null])->random(),
            $p->message => $this->faker->sentence(),
        ];
    }
}
