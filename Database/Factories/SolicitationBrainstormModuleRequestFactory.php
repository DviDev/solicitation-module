<?php
namespace Modules\Solicitation\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\Solicitation\Entities\SolicitationBrainstormModuleRequest\SolicitationPriorityEnum;
use Modules\Solicitation\Entities\SolicitationBrainstormModuleRequest\SolicitationStatusEnum;
use Modules\Solicitation\Models\SolicitationBrainstormModuleRequestModel;
use Modules\Solicitation\Entities\SolicitationBrainstormModuleRequest\SolicitationBrainstormModuleRequestEntityModel;

/**
 * @method SolicitationBrainstormModuleRequestModel create(array $attributes = [])
 * @method SolicitationBrainstormModuleRequestModel make(array $attributes = [])
 */
class SolicitationBrainstormModuleRequestFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = SolicitationBrainstormModuleRequestModel::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        $p = SolicitationBrainstormModuleRequestEntityModel::props(null, true);
        return [
            $p->requester_id => null,
            $p->module_id => null,
            $p->name => $this->faker->sentence(3),
            $p->description => $this->faker->sentence(3),
            $p->solicitant_priority => collect(SolicitationPriorityEnum::toArray())->random(),
            $p->status => collect(SolicitationStatusEnum::toArray())->random(),
            $p->num_order => 1,
            $p->deadline => null,
            $p->solicitant_approval_at => null,
        ];
    }
}
