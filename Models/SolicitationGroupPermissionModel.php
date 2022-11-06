<?php

namespace Modules\Solicitation\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Base\Models\BaseModel;
use Modules\Solicitation\Database\Factories\SolicitationGroupPermissionFactory;
use Modules\Solicitation\Entities\SolicitationGroupPermission\SolicitationGroupPermissionEntityModel;
use Modules\Solicitation\Entities\SolicitationGroupPermission\SolicitationGroupPermissionProps;

/**
 * @author Davi Menezes (davimenezes.dev@gmail.com)
 * @link https://github.com/DaviMenezes
 * @method SolicitationGroupPermissionEntityModel toEntity()
 * @method SolicitationGroupPermissionFactory factory()
 */
class SolicitationGroupPermissionModel extends BaseModel
{
    use HasFactory;
    use SolicitationGroupPermissionProps;

    public function modelEntity(): string
    {
        return SolicitationGroupPermissionEntityModel::class;
    }

    protected static function newFactory(): SolicitationGroupPermissionFactory
    {
        return new SolicitationGroupPermissionFactory();
    }

    public static function table($alias = null): string
    {
        return self::dbTable('solicitation_group_permissions', $alias);
    }
}
