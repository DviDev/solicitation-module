<?php

namespace Modules\Solicitation\Repositories;

use Modules\Base\Repository\BaseRepository;
use Modules\Solicitation\Entities\SolicitationBrainstormModuleUserPermission\SolicitationBrainstormModuleUserPermissionEntityModel;
use Modules\Solicitation\Models\SolicitationBrainstormModuleUserPermissionModel;

/**
 * @author Davi Menezes(davimenezes.dev@gmail.com)
 * @link https://github.com/DaviMenezes
 * @method self obj()
 * @method SolicitationBrainstormModuleUserPermissionModel model()
 * @method SolicitationBrainstormModuleUserPermissionEntityModel find($id)
 * @method SolicitationBrainstormModuleUserPermissionModel first()
 * @method SolicitationBrainstormModuleUserPermissionModel findOrNew($id)
 * @method SolicitationBrainstormModuleUserPermissionModel firstOrNew($query)
 * @method SolicitationBrainstormModuleUserPermissionEntityModel findOrFail($id)
 */
class SolicitationBrainstormModuleUserPermissionRepository extends BaseRepository
{
    /**
     * @inheritDoc
     */
    public function modelClass(): string
    {
        return SolicitationBrainstormModuleUserPermissionModel::class;
    }
}
