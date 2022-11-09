<?php

namespace Modules\Solicitation\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Modules\Base\Models\BaseModel;
use Modules\Solicitation\Database\Factories\SolicitationGroupFactory;
use Modules\Solicitation\Entities\SolicitationGroup\SolicitationGroupEntityModel;
use Modules\Solicitation\Entities\SolicitationGroup\SolicitationGroupProps;

/**
 * @author Davi Menezes (davimenezes.dev@gmail.com)
 * @link https://github.com/DaviMenezes
 * @property-read SolicitationModuleModel $module
 * @method SolicitationGroupEntityModel toEntity()
 * @method static SolicitationGroupFactory factory()
 */
class SolicitationGroupModel extends BaseModel
{
    use HasFactory;
    use SolicitationGroupProps;

    public function modelEntity(): string
    {
        return SolicitationGroupEntityModel::class;
    }

    protected static function newFactory(): SolicitationGroupFactory
    {
        return new SolicitationGroupFactory();
    }

    public static function table($alias = null): string
    {
        return self::dbTable('solicitation_groups', $alias);
    }

    public function module(): BelongsTo
    {
        return $this->belongsTo(SolicitationModuleModel::class, 'module_id');
    }
}
