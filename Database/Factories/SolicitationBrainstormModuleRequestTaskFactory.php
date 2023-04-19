<?php
namespace Modules\Solicitation\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\Solicitation\Models\SolicitationBrainstormModuleRequestTaskModel;
use Modules\Solicitation\Entities\SolicitationBrainstormModuleRequestTask\SolicitationBrainstormModuleRequestTaskEntityModel;

/**
 * @method SolicitationBrainstormModuleRequestTaskModel create(array $attributes = [])
 * @method SolicitationBrainstormModuleRequestTaskModel make(array $attributes = [])
 */
class SolicitationBrainstormModuleRequestTaskFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = SolicitationBrainstormModuleRequestTaskModel::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        $p = SolicitationBrainstormModuleRequestTaskEntityModel::props(null, true);
        return [
            $p->solicitation_id => null,
            $p->task_id => null,
        ];
    }
}
