<?php

namespace Modules\Solicitation\Repositories;

use Modules\Base\Repository\BaseRepository;
use Modules\Solicitation\Entities\SolicitationCommentUpVotesEntityModel;
use Modules\Solicitation\Models\SolicitationCommentUpVotesModel;

/**
 * @author Davi Menezes(davimenezes.dev@gmail.com)
 * @link https://github.com/DaviMenezes
 * @method self obj()
 * @method SolicitationCommentUpVotesModel model()
 * @method SolicitationCommentUpVotesEntityModel find($id)
 * @method SolicitationCommentUpVotesModel first()
 * @method SolicitationCommentUpVotesModel findOrNew($id)
 * @method SolicitationCommentUpVotesModel firstOrNew($query)
 * @method SolicitationCommentUpVotesEntityModel findOrFail($id)
 */
class SolicitationCommentUpVotesRepository extends BaseRepository
{
    /**
     * @inheritDoc
     */
    public function modelClass(): string
    {
        return SolicitationCommentUpVotesModel::class;
    }
}
