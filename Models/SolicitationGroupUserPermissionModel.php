<?php

namespace Modules\Solicitation\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Base\Models\BaseModel;
use Modules\Solicitation\Database\Factories\SolicitationGroupUserPermissionFactory;
use Modules\Solicitation\Entities\SolicitationGroupUserPermission\SolicitationGroupUserPermissionEntityModel;
use Modules\Solicitation\Entities\SolicitationGroupUserPermission\SolicitationGroupUserPermissionProps;

/**
 * @author Davi Menezes (davimenezes.dev@gmail.com)
 * @link https://github.com/DaviMenezes
 * @method SolicitationGroupUserPermissionEntityModel toEntity()
 * @method SolicitationGroupUserPermissionFactory factory()
 */
class SolicitationGroupUserPermissionModel extends BaseModel
{
    use HasFactory;
    use SolicitationGroupUserPermissionProps;

    public function modelEntity(): string
    {
        return SolicitationGroupUserPermissionEntityModel::class;
    }

    protected static function newFactory(): SolicitationGroupUserPermissionFactory
    {
        return new SolicitationGroupUserPermissionFactory();
    }

    public static function table($alias = null): string
    {
        return self::dbTable('solicitation_group_user_permissions', $alias);
    }
}
