<?php

namespace Modules\Solicitation\Repositories;

use Modules\Base\Repository\BaseRepository;
use Modules\Solicitation\Entities\SolicitationBrainstormModuleGroupPermissionUser\SolicitationBrainstormModuleGroupPermissionUserEntityModel;
use Modules\Solicitation\Models\SolicitationBrainstormModuleGroupPermissionUserModel;

/**
 * @author Davi Menezes(davimenezes.dev@gmail.com)
 *
 * @link https://github.com/DaviMenezes
 *
 * @method self obj()
 * @method SolicitationBrainstormModuleGroupPermissionUserModel model()
 * @method SolicitationBrainstormModuleGroupPermissionUserEntityModel find($id)
 * @method SolicitationBrainstormModuleGroupPermissionUserModel first()
 * @method SolicitationBrainstormModuleGroupPermissionUserModel findOrNew($id)
 * @method SolicitationBrainstormModuleGroupPermissionUserModel firstOrNew($query)
 * @method SolicitationBrainstormModuleGroupPermissionUserEntityModel findOrFail($id)
 */
class SolicitationBrainstormModuleGroupUserPermissionRepository extends BaseRepository
{
    /**
     * {@inheritDoc}
     */
    public function modelClass(): string
    {
        return SolicitationBrainstormModuleGroupPermissionUserModel::class;
    }
}
