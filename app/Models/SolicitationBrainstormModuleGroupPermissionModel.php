<?php

namespace Modules\Solicitation\Models;

use Modules\Base\Contracts\BaseModel;
use Modules\Base\Factories\BaseFactory;
use Modules\Solicitation\Entities\SolicitationBrainstormModuleGroupPermission\SolicitationBrainstormModuleGroupPermissionEntityModel;
use Modules\Solicitation\Entities\SolicitationBrainstormModuleGroupPermission\SolicitationBrainstormModuleGroupPermissionProps;

/**
 * @author Davi Menezes (davimenezes.dev@gmail.com)
 *
 * @link https://github.com/DaviMenezes
 *
 * @method SolicitationBrainstormModuleGroupPermissionEntityModel toEntity()
 */
class SolicitationBrainstormModuleGroupPermissionModel extends BaseModel
{
    use SolicitationBrainstormModuleGroupPermissionProps;

    public function modelEntity(): string
    {
        return SolicitationBrainstormModuleGroupPermissionEntityModel::class;
    }

    protected static function newFactory(): BaseFactory
    {
        return new class extends BaseFactory
        {
            protected $model = SolicitationBrainstormModuleGroupPermissionModel::class;
        };
    }

    public static function table($alias = null): string
    {
        return self::dbTable('solicitation_module_group_permissions', $alias);
    }
}
