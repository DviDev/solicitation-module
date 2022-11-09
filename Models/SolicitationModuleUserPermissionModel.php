<?php

namespace Modules\Solicitation\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Base\Models\BaseModel;
use Modules\Solicitation\Database\Factories\SolicitationModuleUserPermissionFactory;
use Modules\Solicitation\Entities\SolicitationModuleUserPermission\SolicitationModuleUserPermissionEntityModel;
use Modules\Solicitation\Entities\SolicitationModuleUserPermission\SolicitationModuleUserPermissionProps;

/**
 * @author Davi Menezes (davimenezes.dev@gmail.com)
 * @link https://github.com/DaviMenezes
 * @method SolicitationModuleUserPermissionEntityModel toEntity()
 * @method static SolicitationModuleUserPermissionFactory factory()
 */
class SolicitationModuleUserPermissionModel extends BaseModel
{
    use HasFactory;
    use SolicitationModuleUserPermissionProps;

    public function modelEntity(): string
    {
        return SolicitationModuleUserPermissionEntityModel::class;
    }

    protected static function newFactory(): SolicitationModuleUserPermissionFactory
    {
        return new SolicitationModuleUserPermissionFactory();
    }

    public static function table($alias = null): string
    {
        return self::dbTable('solicitation_module_user_permissions', $alias);
    }
}
