<?php

namespace Modules\Solicitation\Repositories;

use Modules\Base\Repository\BaseRepository;
use Modules\Solicitation\Entities\SolicitationGroupUserPermissionEntityModel;
use Modules\Solicitation\Models\SolicitationGroupUserPermissionModel;

/**
 * @author Davi Menezes(davimenezes.dev@gmail.com)
 * @link https://github.com/DaviMenezes
 * @method self obj()
 * @method SolicitationGroupUserPermissionModel model()
 * @method SolicitationGroupUserPermissionEntityModel find($id)
 * @method SolicitationGroupUserPermissionModel first()
 * @method SolicitationGroupUserPermissionModel findOrNew($id)
 * @method SolicitationGroupUserPermissionModel firstOrNew($query)
 * @method SolicitationGroupUserPermissionEntityModel findOrFail($id)
 */
class SolicitationGroupUserPermissionRepository extends BaseRepository
{
    /**
     * @inheritDoc
     */
    public function modelClass(): string
    {
        return SolicitationGroupUserPermissionModel::class;
    }
}
