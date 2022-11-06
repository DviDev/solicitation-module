<?php
namespace Modules\Solicitation\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\Solicitation\Models\SolicitationTaskModel;
use Modules\Solicitation\Entities\SolicitationTask\SolicitationTaskEntityModel;

/**
 * @method SolicitationTaskModel create(array $attributes = [])
 * @method SolicitationTaskModel make(array $attributes = [])
 */
class SolicitationTaskFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = SolicitationTaskModel::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        $p = SolicitationTaskEntityModel::props(null, true);
        return [

        ];
    }
}
