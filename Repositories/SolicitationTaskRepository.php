<?php

namespace Modules\Solicitation\Repositories;

use Modules\Base\Repository\BaseRepository;
use Modules\Solicitation\Entities\SolicitationTaskEntityModel;
use Modules\Solicitation\Models\SolicitationTaskModel;

/**
 * @author Davi Menezes(davimenezes.dev@gmail.com)
 * @link https://github.com/DaviMenezes
 * @method self obj()
 * @method SolicitationTaskModel model()
 * @method SolicitationTaskEntityModel find($id)
 * @method SolicitationTaskModel first()
 * @method SolicitationTaskModel findOrNew($id)
 * @method SolicitationTaskModel firstOrNew($query)
 * @method SolicitationTaskEntityModel findOrFail($id)
 */
class SolicitationTaskRepository extends BaseRepository
{
    /**
     * @inheritDoc
     */
    public function modelClass(): string
    {
        return SolicitationTaskModel::class;
    }
}
