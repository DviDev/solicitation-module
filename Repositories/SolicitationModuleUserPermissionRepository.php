<?php

namespace Modules\Solicitation\Repositories;

use Modules\Base\Repository\BaseRepository;
use Modules\Solicitation\Entities\SolicitationModuleUserPermission\SolicitationModuleUserPermissionEntityModel;
use Modules\Solicitation\Models\SolicitationModuleUserPermissionModel;

/**
 * @author Davi Menezes(davimenezes.dev@gmail.com)
 * @link https://github.com/DaviMenezes
 * @method self obj()
 * @method SolicitationModuleUserPermissionModel model()
 * @method SolicitationModuleUserPermissionEntityModel find($id)
 * @method SolicitationModuleUserPermissionModel first()
 * @method SolicitationModuleUserPermissionModel findOrNew($id)
 * @method SolicitationModuleUserPermissionModel firstOrNew($query)
 * @method SolicitationModuleUserPermissionEntityModel findOrFail($id)
 */
class SolicitationModuleUserPermissionRepository extends BaseRepository
{
    /**
     * @inheritDoc
     */
    public function modelClass(): string
    {
        return SolicitationModuleUserPermissionModel::class;
    }
}
