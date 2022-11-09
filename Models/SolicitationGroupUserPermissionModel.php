<?php

namespace Modules\Solicitation\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Modules\Base\Models\BaseModel;
use Modules\Social\Models\SocialGroupModel;
use Modules\Solicitation\Database\Factories\SolicitationGroupUserPermissionFactory;
use Modules\Solicitation\Entities\SolicitationGroupUserPermission\SolicitationGroupUserPermissionEntityModel;
use Modules\Solicitation\Entities\SolicitationGroupUserPermission\SolicitationGroupUserPermissionProps;

/**
 * @author Davi Menezes (davimenezes.dev@gmail.com)
 * @link https://github.com/DaviMenezes
 * @property-read SolicitationGroupModel$group
 * @property-read User $user
 * @method SolicitationGroupUserPermissionEntityModel toEntity()
 * @method static SolicitationGroupUserPermissionFactory factory()
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

    public function group(): BelongsTo
    {
        return $this->belongsTo(SolicitationGroupModel::class, 'group_id');
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
