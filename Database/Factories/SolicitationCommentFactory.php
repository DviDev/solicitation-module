<?php
namespace Modules\Solicitation\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\Solicitation\Models\SolicitationCommentModel;
use Modules\Solicitation\Entities\SolicitationComment\SolicitationCommentEntityModel;

/**
 * @method SolicitationCommentModel create(array $attributes = [])
 * @method SolicitationCommentModel make(array $attributes = [])
 */
class SolicitationCommentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = SolicitationCommentModel::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        $p = SolicitationCommentEntityModel::props(null, true);
        return [

        ];
    }
}
