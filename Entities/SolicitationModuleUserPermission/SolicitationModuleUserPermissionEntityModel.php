<?php

namespace Modules\Solicitation\Entities\SolicitationModuleUserPermission;

use Modules\Base\Entities\BaseEntityModel;
use Modules\Solicitation\Repositories\SolicitationModuleUserPermissionRepository;
use Modules\Solicitation\Models\SolicitationModuleUserPermissionModel;

/**
 * @author Davi Menezes (davimenezes.dev@gmail.com)
 * @link https://github.com/DaviMenezes
 * @property-read SolicitationModuleUserPermissionModel $model
 * @method self save()
 * @method static self new()
 * @method static self props($alias = null, $force = null)
 * @method SolicitationModuleUserPermissionRepository repository()
 */
class SolicitationModuleUserPermissionEntityModel extends BaseEntityModel
{
    use SolicitationModuleUserPermissionProps;

    protected function repositoryClass(): string
    {
        return SolicitationModuleUserPermissionRepository::class;
    }
}
