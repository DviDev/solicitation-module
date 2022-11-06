<?php
namespace Modules\Solicitation\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\Solicitation\Models\SolicitationCommentDownVotesModel;
use Modules\Solicitation\Entities\SolicitationCommentDownVotes\SolicitationCommentDownVotesEntityModel;

/**
 * @method SolicitationCommentDownVotesModel create(array $attributes = [])
 * @method SolicitationCommentDownVotesModel make(array $attributes = [])
 */
class SolicitationCommentDownVotesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = SolicitationCommentDownVotesModel::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        $p = SolicitationCommentDownVotesEntityModel::props(null, true);
        return [

        ];
    }
}
