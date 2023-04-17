<?php

namespace Modules\Solicitation\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Base\Models\BaseModel;
use Modules\Solicitation\Database\Factories\SolicitationBrainstormModuleGroupPermissionFactory;
use Modules\Solicitation\Entities\SolicitationBrainstormModuleGroupPermission\SolicitationBrainstormModuleGroupPermissionEntityModel;
use Modules\Solicitation\Entities\SolicitationBrainstormModuleGroupPermission\SolicitationBrainstormModuleGroupPermissionProps;

/**
 * @author Davi Menezes (davimenezes.dev@gmail.com)
 * @link https://github.com/DaviMenezes
 * @method SolicitationBrainstormModuleGroupPermissionEntityModel toEntity()
 * @method static SolicitationBrainstormModuleGroupPermissionFactory factory()
 */
class SolicitationBrainstormModuleGroupPermissionModel extends BaseModel
{
    use HasFactory;
    use SolicitationBrainstormModuleGroupPermissionProps;

    public function modelEntity(): string
    {
        return SolicitationBrainstormModuleGroupPermissionEntityModel::class;
    }

    protected static function newFactory(): SolicitationBrainstormModuleGroupPermissionFactory
    {
        return new SolicitationBrainstormModuleGroupPermissionFactory();
    }

    public static function table($alias = null): string
    {
        return self::dbTable('solicitation_brainstorm_module_group_permissions', $alias);
    }
}
