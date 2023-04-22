<?php

namespace Modules\Solicitation\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Modules\Base\Models\BaseModel;
use Modules\Solicitation\Database\Factories\SolicitationBrainstormModuleFactory;
use Modules\Solicitation\Entities\SolicitationBrainstormModule\SolicitationBrainstormModuleEntityModel;
use Modules\Solicitation\Entities\SolicitationBrainstormModule\SolicitationBrainstormModuleProps;

/**
 * @author Davi Menezes (davimenezes.dev@gmail.com)
 * @link https://github.com/DaviMenezes
 * @property-read SolicitationBrainstormModel $brainstorm
 * @method SolicitationBrainstormModuleEntityModel toEntity()
 * @method static SolicitationBrainstormModuleFactory factory()
 */
class SolicitationBrainstormModuleModel extends BaseModel
{
    use HasFactory;
    use SolicitationBrainstormModuleProps;

    public function modelEntity(): string
    {
        return SolicitationBrainstormModuleEntityModel::class;
    }

    protected static function newFactory(): SolicitationBrainstormModuleFactory
    {
        return new SolicitationBrainstormModuleFactory();
    }

    public static function table($alias = null): string
    {
        return self::dbTable('solicitation_brainstorm_modules', $alias);
    }

    public function brainstorm(): BelongsTo
    {
        return $this->belongsTo(SolicitationBrainstormModel::class, 'brainstorm_id');
    }

    public function groups(): HasMany
    {
        return $this->hasMany(SolicitationBrainstormModuleGroupModel::class, 'module_id');
    }

    public function userPermissions(): HasMany
    {
        return $this->hasMany(SolicitationBrainstormModuleUserPermissionModel::class, 'module_id');
    }

    public function requests(): HasMany
    {
        return $this->hasMany(SolicitationBrainstormModuleRequestModel::class, 'module_id');
    }
}
