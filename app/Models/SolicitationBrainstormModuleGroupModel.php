<?php

declare(strict_types=1);

namespace Modules\Solicitation\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Modules\Base\Contracts\BaseModel;
use Modules\Base\Factories\BaseFactory;
use Modules\Solicitation\Entities\SolicitationBrainstormModuleGroup\SolicitationBrainstormModuleGroupEntityModel;
use Modules\Solicitation\Entities\SolicitationBrainstormModuleGroup\SolicitationBrainstormModuleGroupProps;

/**
 * @author Davi Menezes (davimenezes.dev@gmail.com)
 *
 * @link https://github.com/DaviMenezes
 *
 * @property-read SolicitationBrainstormModuleModel $module
 *
 * @method SolicitationBrainstormModuleGroupEntityModel toEntity()
 */
final class SolicitationBrainstormModuleGroupModel extends BaseModel
{
    use SolicitationBrainstormModuleGroupProps;

    public static function table($alias = null): string
    {
        return self::dbTable('solicitation_module_groups', $alias);
    }

    public function modelEntity(): string
    {
        return SolicitationBrainstormModuleGroupEntityModel::class;
    }

    public function module(): BelongsTo
    {
        return $this->belongsTo(SolicitationBrainstormModuleModel::class, 'module_id');
    }

    public function permissions(): HasMany
    {
        return $this->hasMany(SolicitationBrainstormModuleGroupPermissionModel::class, 'group_id');
    }

    public function permissionUsers(): HasMany
    {
        return $this->hasMany(SolicitationBrainstormModuleGroupPermissionUserModel::class, 'group_id');
    }

    protected static function newFactory(): BaseFactory
    {
        return new class extends BaseFactory
        {
            protected $model = SolicitationBrainstormModuleGroupModel::class;
        };
    }
}
