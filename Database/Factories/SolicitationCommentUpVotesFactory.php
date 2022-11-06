<?php
namespace Modules\Solicitation\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\Solicitation\Models\SolicitationCommentUpVotesModel;
use Modules\Solicitation\Entities\SolicitationCommentUpVotes\SolicitationCommentUpVotesEntityModel;

/**
 * @method SolicitationCommentUpVotesModel create(array $attributes = [])
 * @method SolicitationCommentUpVotesModel make(array $attributes = [])
 */
class SolicitationCommentUpVotesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = SolicitationCommentUpVotesModel::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        $p = SolicitationCommentUpVotesEntityModel::props(null, true);
        return [

        ];
    }
}
