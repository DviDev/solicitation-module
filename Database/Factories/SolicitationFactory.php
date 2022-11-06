<?php
namespace Modules\Solicitation\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\Solicitation\Models\SolicitationModel;
use Modules\Solicitation\Entities\Solicitation\SolicitationEntityModel;

/**
 * @method SolicitationModel create(array $attributes = [])
 * @method SolicitationModel make(array $attributes = [])
 */
class SolicitationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = SolicitationModel::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        $p = SolicitationEntityModel::props(null, true);
        return [

        ];
    }
}
