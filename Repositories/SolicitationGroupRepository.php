<?php

namespace Modules\Solicitation\Repositories;

use Modules\Base\Repository\BaseRepository;
use Modules\Solicitation\Entities\SolicitationGroupEntityModel;
use Modules\Solicitation\Models\SolicitationGroupModel;

/**
 * @author Davi Menezes(davimenezes.dev@gmail.com)
 * @link https://github.com/DaviMenezes
 * @method self obj()
 * @method SolicitationGroupModel model()
 * @method SolicitationGroupEntityModel find($id)
 * @method SolicitationGroupModel first()
 * @method SolicitationGroupModel findOrNew($id)
 * @method SolicitationGroupModel firstOrNew($query)
 * @method SolicitationGroupEntityModel findOrFail($id)
 */
class SolicitationGroupRepository extends BaseRepository
{
    /**
     * @inheritDoc
     */
    public function modelClass(): string
    {
        return SolicitationGroupModel::class;
    }
}
