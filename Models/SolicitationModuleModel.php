<?php

namespace Modules\Solicitation\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Modules\Base\Models\BaseModel;
use Modules\Solicitation\Database\Factories\SolicitationModuleFactory;
use Modules\Solicitation\Entities\SolicitationModule\SolicitationModuleEntityModel;
use Modules\Solicitation\Entities\SolicitationModule\SolicitationModuleProps;

/**
 * @author Davi Menezes (davimenezes.dev@gmail.com)
 * @link https://github.com/DaviMenezes
 * @property-read SolicitationBrainstormModel $brainstorm
 * @method SolicitationModuleEntityModel toEntity()
 * @method static SolicitationModuleFactory factory()
 */
class SolicitationModuleModel extends BaseModel
{
    use HasFactory;
    use SolicitationModuleProps;

    public function modelEntity(): string
    {
        return SolicitationModuleEntityModel::class;
    }

    protected static function newFactory(): SolicitationModuleFactory
    {
        return new SolicitationModuleFactory();
    }

    public static function table($alias = null): string
    {
        return self::dbTable('solicitation_modules', $alias);
    }

    public function brainstorm(): BelongsTo
    {
        return $this->belongsTo(SolicitationModuleModel::class, 'brainstorm_id');
    }
}
