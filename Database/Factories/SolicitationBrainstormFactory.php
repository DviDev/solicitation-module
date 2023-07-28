<?php
namespace Modules\Solicitation\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\Base\Factories\BaseFactory;
use Modules\Solicitation\Models\SolicitationBrainstormModel;
use Modules\Solicitation\Entities\SolicitationBrainstorm\SolicitationBrainstormEntityModel;

/**
 * @method SolicitationBrainstormModel create(array $attributes = [])
 * @method SolicitationBrainstormModel make(array $attributes = [])
 */
class SolicitationBrainstormFactory extends BaseFactory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = SolicitationBrainstormModel::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        $p = SolicitationBrainstormEntityModel::props(null, true);
        return [
            $p->user_id => null,
            $p->project_id => null,
            $p->content => $this->faker->sentence(),
        ];
    }
}
