<?php

namespace Modules\Solicitation\Entities\SolicitationBrainstormModuleGroupPermission;

use Modules\Base\Entities\BaseEntityModel;
use Modules\Solicitation\Models\SolicitationBrainstormModuleGroupPermissionModel;
use Modules\Solicitation\Repositories\SolicitationBrainstormModuleGroupPermissionRepository;

/**
 * @author Davi Menezes (davimenezes.dev@gmail.com)
 *
 * @link https://github.com/DaviMenezes
 *
 * @property-read SolicitationBrainstormModuleGroupPermissionModel $model
 *
 * @method self save()
 * @method static self new()
 * @method static self props($alias = null, $force = null)
 * @method SolicitationBrainstormModuleGroupPermissionRepository repository()
 */
class SolicitationBrainstormModuleGroupPermissionEntityModel extends BaseEntityModel
{
    use SolicitationBrainstormModuleGroupPermissionProps;

    protected function repositoryClass(): string
    {
        return SolicitationBrainstormModuleGroupPermissionRepository::class;
    }
}
