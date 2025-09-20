<?php

declare(strict_types=1);

namespace Modules\Solicitation\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Modules\Base\Contracts\BaseModel;
use Modules\Base\Factories\BaseFactory;
use Modules\Solicitation\Entities\SolicitationBrainstormModuleGroupPermissionUser\SolicitationBrainstormModuleGroupPermissionUserEntityModel;
use Modules\Solicitation\Entities\SolicitationBrainstormModuleGroupPermissionUser\SolicitationBrainstormModuleGroupPermissionUserProps;

/**
 * @author Davi Menezes (davimenezes.dev@gmail.com)
 *
 * @link https://github.com/DaviMenezes
 *
 * @property-read SolicitationBrainstormModuleGroupModel $group
 * @property-read User $user
 *
 * @method SolicitationBrainstormModuleGroupPermissionUserEntityModel toEntity()
 */
final class SolicitationBrainstormModuleGroupPermissionUserModel extends BaseModel
{
    use SolicitationBrainstormModuleGroupPermissionUserProps;

    public static function table($alias = null): string
    {
        return self::dbTable('solicitation_module_group_permission_users', $alias);
    }

    public function modelEntity(): string
    {
        return SolicitationBrainstormModuleGroupPermissionUserEntityModel::class;
    }

    public function group(): BelongsTo
    {
        return $this->belongsTo(SolicitationBrainstormModuleGroupModel::class, 'group_id');
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    protected static function newFactory(): BaseFactory
    {
        return new class extends BaseFactory
        {
            protected $model = SolicitationBrainstormModuleGroupPermissionUserModel::class;
        };
    }
}
