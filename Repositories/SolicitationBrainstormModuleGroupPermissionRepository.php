<?php

namespace Modules\Solicitation\Repositories;

use Modules\Base\Repository\BaseRepository;
use Modules\Solicitation\Entities\SolicitationBrainstormModuleGroupPermission\SolicitationBrainstormModuleGroupPermissionEntityModel;
use Modules\Solicitation\Models\SolicitationBrainstormModuleGroupPermissionModel;

/**
 * @author Davi Menezes(davimenezes.dev@gmail.com)
 *
 * @link https://github.com/DaviMenezes
 *
 * @method self obj()
 * @method SolicitationBrainstormModuleGroupPermissionModel model()
 * @method SolicitationBrainstormModuleGroupPermissionEntityModel find($id)
 * @method SolicitationBrainstormModuleGroupPermissionModel first()
 * @method SolicitationBrainstormModuleGroupPermissionModel findOrNew($id)
 * @method SolicitationBrainstormModuleGroupPermissionModel firstOrNew($query)
 * @method SolicitationBrainstormModuleGroupPermissionEntityModel findOrFail($id)
 */
class SolicitationBrainstormModuleGroupPermissionRepository extends BaseRepository
{
    /**
     * {@inheritDoc}
     */
    public function modelClass(): string
    {
        return SolicitationBrainstormModuleGroupPermissionModel::class;
    }
}
