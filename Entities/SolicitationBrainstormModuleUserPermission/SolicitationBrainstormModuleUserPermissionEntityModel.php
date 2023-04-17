<?php

namespace Modules\Solicitation\Entities\SolicitationBrainstormModuleUserPermission;

use Modules\Base\Entities\BaseEntityModel;
use Modules\Solicitation\Repositories\SolicitationBrainstormModuleUserPermissionRepository;
use Modules\Solicitation\Models\SolicitationBrainstormModuleUserPermissionModel;

/**
 * @author Davi Menezes (davimenezes.dev@gmail.com)
 * @link https://github.com/DaviMenezes
 * @property-read SolicitationBrainstormModuleUserPermissionModel $model
 * @method self save()
 * @method static self new()
 * @method static self props($alias = null, $force = null)
 * @method SolicitationBrainstormModuleUserPermissionRepository repository()
 */
class SolicitationBrainstormModuleUserPermissionEntityModel extends BaseEntityModel
{
    use SolicitationBrainstormModuleUserPermissionProps;

    protected function repositoryClass(): string
    {
        return SolicitationBrainstormModuleUserPermissionRepository::class;
    }
}
