<?php
namespace Modules\Solicitation\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\Base\Factories\BaseFactory;
use Modules\Solicitation\Models\SolicitationBrainstormModuleCommentRequestReactionModel;
use Modules\Solicitation\Entities\SolicitationBrainstormModuleRequestCommentReaction\SolicitationBrainstormModuleRequestCommentReactionEntityModel;

/**
 * @method SolicitationBrainstormModuleCommentRequestReactionModel create(array $attributes = [])
 * @method SolicitationBrainstormModuleCommentRequestReactionModel make(array $attributes = [])
 */
class SolicitationBrainstormModuleRequestCommentReactionFactory extends BaseFactory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = SolicitationBrainstormModuleCommentRequestReactionModel::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        $p = SolicitationBrainstormModuleRequestCommentReactionEntityModel::props(null, true);
        return [
            $p->comment_id => null,
            $p->user_id => null,
            $p->up_vote => null,
            $p->down_vote => null,
        ];
    }
}
