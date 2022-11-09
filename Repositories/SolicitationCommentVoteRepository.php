<?php

namespace Modules\Solicitation\Repositories;

use Modules\Base\Repository\BaseRepository;
use Modules\Solicitation\Entities\SolicitationCommentVote\SolicitationCommentVoteEntityModel;
use Modules\Solicitation\Models\SolicitationCommentVoteModel;

/**
 * @author Davi Menezes(davimenezes.dev@gmail.com)
 * @link https://github.com/DaviMenezes
 * @method self obj()
 * @method SolicitationCommentVoteModel model()
 * @method SolicitationCommentVoteEntityModel find($id)
 * @method SolicitationCommentVoteModel first()
 * @method SolicitationCommentVoteModel findOrNew($id)
 * @method SolicitationCommentVoteModel firstOrNew($query)
 * @method SolicitationCommentVoteEntityModel findOrFail($id)
 */
class SolicitationCommentVoteRepository extends BaseRepository
{
    /**
     * @inheritDoc
     */
    public function modelClass(): string
    {
        return SolicitationCommentVoteModel::class;
    }
}
