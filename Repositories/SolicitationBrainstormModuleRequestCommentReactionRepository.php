<?php

namespace Modules\Solicitation\Repositories;

use Modules\Base\Repository\BaseRepository;
use Modules\Solicitation\Entities\SolicitationBrainstormModuleRequestCommentReaction\SolicitationBrainstormModuleRequestCommentReactionEntityModel;
use Modules\Solicitation\Models\SolicitationBrainstormModuleCommentRequestReactionModel;

/**
 * @author Davi Menezes(davimenezes.dev@gmail.com)
 * @link https://github.com/DaviMenezes
 * @method self obj()
 * @method SolicitationBrainstormModuleCommentRequestReactionModel model()
 * @method SolicitationBrainstormModuleRequestCommentReactionEntityModel find($id)
 * @method SolicitationBrainstormModuleCommentRequestReactionModel first()
 * @method SolicitationBrainstormModuleCommentRequestReactionModel findOrNew($id)
 * @method SolicitationBrainstormModuleCommentRequestReactionModel firstOrNew($query)
 * @method SolicitationBrainstormModuleRequestCommentReactionEntityModel findOrFail($id)
 */
class SolicitationBrainstormModuleRequestCommentReactionRepository extends BaseRepository
{
    /**
     * @inheritDoc
     */
    public function modelClass(): string
    {
        return SolicitationBrainstormModuleCommentRequestReactionModel::class;
    }
}
