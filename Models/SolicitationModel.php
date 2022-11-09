<?php

namespace Modules\Solicitation\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Modules\Base\Models\BaseModel;
use Modules\Solicitation\Database\Factories\SolicitationFactory;
use Modules\Solicitation\Entities\Solicitation\SolicitationEntityModel;
use Modules\Solicitation\Entities\Solicitation\SolicitationProps;

/**
 * @author Davi Menezes (davimenezes.dev@gmail.com)
 * @link https://github.com/DaviMenezes
 * @property-read User $solicitant
 * @property-read SolicitationModuleModel $module
 * @method SolicitationEntityModel toEntity()
 * @method static SolicitationFactory factory()
 */
class SolicitationModel extends BaseModel
{
    use HasFactory;
    use SolicitationProps;

    public function modelEntity(): string
    {
        return SolicitationEntityModel::class;
    }

    protected static function newFactory(): SolicitationFactory
    {
        return new SolicitationFactory();
    }

    public static function table($alias = null): string
    {
        return self::dbTable('solicitations', $alias);
    }

    public function solicitant(): BelongsTo
    {
        return $this->belongsTo(User::class, 'solicitant_id');
    }

    public function module(): BelongsTo
    {
        return $this->belongsTo(SolicitationModuleModel::class, 'module_id');
    }
}
