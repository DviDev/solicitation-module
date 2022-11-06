<?php

namespace Modules\Solicitation\Entities\SolicitationGroupUserPermission;

use Modules\Base\Entities\BaseEntityModel;
use Modules\Solicitation\Repositories\SolicitationGroupUserPermissionRepository;
use Modules\Solicitation\Models\SolicitationGroupUserPermissionModel;

/**
 * @author Davi Menezes (davimenezes.dev@gmail.com)
 * @link https://github.com/DaviMenezes
 * @property-read SolicitationGroupUserPermissionModel $model
 * @method self save()
 * @method static self new()
 * @method static self props($alias = null, $force = null)
 * @method SolicitationGroupUserPermissionRepository repository()
 */
class SolicitationGroupUserPermissionEntityModel extends BaseEntityModel
{
    use SolicitationGroupUserPermissionProps;

    protected function repositoryClass(): string
    {
        return SolicitationGroupUserPermissionRepository::class;
    }
}
