<?php
namespace Modules\Solicitation\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\Solicitation\Models\SolicitationCommentVoteModel;
use Modules\Solicitation\Entities\SolicitationCommentVote\SolicitationCommentVoteEntityModel;

/**
 * @method SolicitationCommentVoteModel create(array $attributes = [])
 * @method SolicitationCommentVoteModel make(array $attributes = [])
 */
class SolicitationCommentVoteFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = SolicitationCommentVoteModel::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        $p = SolicitationCommentVoteEntityModel::props(null, true);
        return [
            $p->comment_id => null,
            $p->user_id => null,
            $p->up_vote => null,
            $p->down_vote => null,
        ];
    }
}
