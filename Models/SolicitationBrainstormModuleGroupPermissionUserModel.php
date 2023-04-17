<?php

namespace Modules\Solicitation\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Modules\Base\Models\BaseModel;
use Modules\Solicitation\Database\Factories\SolicitationBrainstormModuleGroupPermissionUserFactory;
use Modules\Solicitation\Entities\SolicitationBrainstormModuleGroupPermissionUser\SolicitationBrainstormModuleGroupPermissionUserEntityModel;
use Modules\Solicitation\Entities\SolicitationBrainstormModuleGroupPermissionUser\SolicitationBrainstormModuleGroupPermissionUserProps;

/**
 * @author Davi Menezes (davimenezes.dev@gmail.com)
 * @link https://github.com/DaviMenezes
 * @property-read SolicitationBrainstormModuleGroupModel$group
 * @property-read User $user
 * @method SolicitationBrainstormModuleGroupPermissionUserEntityModel toEntity()
 * @method static SolicitationBrainstormModuleGroupPermissionUserFactory factory()
 */
class SolicitationBrainstormModuleGroupPermissionUserModel extends BaseModel
{
    use HasFactory;
    use SolicitationBrainstormModuleGroupPermissionUserProps;

    public function modelEntity(): string
    {
        return SolicitationBrainstormModuleGroupPermissionUserEntityModel::class;
    }

    protected static function newFactory(): SolicitationBrainstormModuleGroupPermissionUserFactory
    {
        return new SolicitationBrainstormModuleGroupPermissionUserFactory();
    }

    public static function table($alias = null): string
    {
        return self::dbTable('solicitation_brainstorm_module_group_permission_users', $alias);
    }

    public function group(): BelongsTo
    {
        return $this->belongsTo(SolicitationBrainstormModuleGroupModel::class, 'group_id');
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
