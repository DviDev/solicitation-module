<?php

namespace Modules\Solicitation\Repositories;

use Modules\Base\Repository\BaseRepository;
use Modules\Solicitation\Entities\SolicitationGroupPermission\SolicitationGroupPermissionEntityModel;
use Modules\Solicitation\Models\SolicitationGroupPermissionModel;

/**
 * @author Davi Menezes(davimenezes.dev@gmail.com)
 * @link https://github.com/DaviMenezes
 * @method self obj()
 * @method SolicitationGroupPermissionModel model()
 * @method SolicitationGroupPermissionEntityModel find($id)
 * @method SolicitationGroupPermissionModel first()
 * @method SolicitationGroupPermissionModel findOrNew($id)
 * @method SolicitationGroupPermissionModel firstOrNew($query)
 * @method SolicitationGroupPermissionEntityModel findOrFail($id)
 */
class SolicitationGroupPermissionRepository extends BaseRepository
{
    /**
     * @inheritDoc
     */
    public function modelClass(): string
    {
        return SolicitationGroupPermissionModel::class;
    }
}
