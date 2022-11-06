<?php

namespace Modules\Solicitation\Repositories;

use Modules\Base\Repository\BaseRepository;
use Modules\Solicitation\Entities\SolicitationCommentDownVotes\SolicitationCommentDownVotesEntityModel;
use Modules\Solicitation\Models\SolicitationCommentDownVotesModel;

/**
 * @author Davi Menezes(davimenezes.dev@gmail.com)
 * @link https://github.com/DaviMenezes
 * @method self obj()
 * @method SolicitationCommentDownVotesModel model()
 * @method SolicitationCommentDownVotesEntityModel find($id)
 * @method SolicitationCommentDownVotesModel first()
 * @method SolicitationCommentDownVotesModel findOrNew($id)
 * @method SolicitationCommentDownVotesModel firstOrNew($query)
 * @method SolicitationCommentDownVotesEntityModel findOrFail($id)
 */
class SolicitationCommentDownVotesRepository extends BaseRepository
{
    /**
     * @inheritDoc
     */
    public function modelClass(): string
    {
        return SolicitationCommentDownVotesModel::class;
    }
}
