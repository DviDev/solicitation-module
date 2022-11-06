<?php

namespace Modules\Solicitation\Repositories;

use Modules\Base\Repository\BaseRepository;
use Modules\Solicitation\Entities\SolicitationComment\SolicitationCommentEntityModel;
use Modules\Solicitation\Models\SolicitationCommentModel;

/**
 * @author Davi Menezes(davimenezes.dev@gmail.com)
 * @link https://github.com/DaviMenezes
 * @method self obj()
 * @method SolicitationCommentModel model()
 * @method SolicitationCommentEntityModel find($id)
 * @method SolicitationCommentModel first()
 * @method SolicitationCommentModel findOrNew($id)
 * @method SolicitationCommentModel firstOrNew($query)
 * @method SolicitationCommentEntityModel findOrFail($id)
 */
class SolicitationCommentRepository extends BaseRepository
{
    /**
     * @inheritDoc
     */
    public function modelClass(): string
    {
        return SolicitationCommentModel::class;
    }
}
