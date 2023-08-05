<?php

namespace Modules\Solicitation\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Modules\Base\Factories\BaseFactory;
use Modules\Base\Models\BaseModel;
use Modules\Solicitation\Entities\SolicitationBrainstormModuleGroup\SolicitationBrainstormModuleGroupEntityModel;
use Modules\Solicitation\Entities\SolicitationBrainstormModuleGroup\SolicitationBrainstormModuleGroupProps;

/**
 * @author Davi Menezes (davimenezes.dev@gmail.com)
 * @link https://github.com/DaviMenezes
 * @property-read SolicitationBrainstormModuleModel $module
 * @method SolicitationBrainstormModuleGroupEntityModel toEntity()
 */
class SolicitationBrainstormModuleGroupModel extends BaseModel
{
    use HasFactory;
    use SolicitationBrainstormModuleGroupProps;

    public function modelEntity(): string
    {
        return SolicitationBrainstormModuleGroupEntityModel::class;
    }

    protected static function newFactory(): BaseFactory
    {
        return new class extends BaseFactory {
            protected $model = SolicitationBrainstormModuleGroupModel::class;
        };
    }

    public static function table($alias = null): string
    {
        return self::dbTable('solicitation_brainstorm_module_groups', $alias);
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
}
