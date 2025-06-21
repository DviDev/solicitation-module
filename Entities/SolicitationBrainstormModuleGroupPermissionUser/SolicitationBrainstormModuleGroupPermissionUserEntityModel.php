<?php

namespace Modules\Solicitation\Entities\SolicitationBrainstormModuleGroupPermissionUser;

use Modules\Base\Entities\BaseEntityModel;
use Modules\Solicitation\Models\SolicitationBrainstormModuleGroupPermissionUserModel;
use Modules\Solicitation\Repositories\SolicitationBrainstormModuleGroupUserPermissionRepository;

/**
 * @author Davi Menezes (davimenezes.dev@gmail.com)
 *
 * @link https://github.com/DaviMenezes
 *
 * @property-read SolicitationBrainstormModuleGroupPermissionUserModel $model
 *
 * @method self save()
 * @method static self new()
 * @method static self props($alias = null, $force = null)
 * @method SolicitationBrainstormModuleGroupUserPermissionRepository repository()
 */
class SolicitationBrainstormModuleGroupPermissionUserEntityModel extends BaseEntityModel
{
    use SolicitationBrainstormModuleGroupPermissionUserProps;

    protected function repositoryClass(): string
    {
        return SolicitationBrainstormModuleGroupUserPermissionRepository::class;
    }
}
