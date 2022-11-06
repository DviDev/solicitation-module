<?php

namespace Modules\Solicitation\Entities\SolicitationGroupPermission;

use Modules\Base\Entities\BaseEntityModel;
use Modules\Solicitation\Repositories\SolicitationGroupPermissionRepository;
use Modules\Solicitation\Models\SolicitationGroupPermissionModel;

/**
 * @author Davi Menezes (davimenezes.dev@gmail.com)
 * @link https://github.com/DaviMenezes
 * @property-read SolicitationGroupPermissionModel $model
 * @method self save()
 * @method static self new()
 * @method static self props($alias = null, $force = null)
 * @method SolicitationGroupPermissionRepository repository()
 */
class SolicitationGroupPermissionEntityModel extends BaseEntityModel
{
    use SolicitationGroupPermissionProps;

    protected function repositoryClass(): string
    {
        return SolicitationGroupPermissionRepository::class;
    }
}
