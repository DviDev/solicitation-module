<?php

namespace Modules\Solicitation\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Modules\Base\Contracts\BaseModel;
use Modules\Base\Factories\BaseFactory;
use Modules\Project\Models\ProjectModel;
use Modules\Solicitation\Entities\SolicitationBrainstorm\SolicitationBrainstormEntityModel;
use Modules\Solicitation\Entities\SolicitationBrainstorm\SolicitationBrainstormProps;

/**
 * @author Davi Menezes (davimenezes.dev@gmail.com)
 *
 * @link https://github.com/DaviMenezes
 *
 * @property-read User $user
 * @property-read ProjectModel $project
 *
 * @method SolicitationBrainstormEntityModel toEntity()
 */
class SolicitationBrainstormModel extends BaseModel
{
    use SolicitationBrainstormProps;

    public function modelEntity(): string
    {
        return SolicitationBrainstormEntityModel::class;
    }

    protected static function newFactory(): BaseFactory
    {
        return new class extends BaseFactory {
            protected $model = SolicitationBrainstormModel::class;
        };
    }

    public static function table($alias = null): string
    {
        return self::dbTable('solicitations', $alias);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function modules(): HasMany
    {
        return $this->hasMany(SolicitationBrainstormModuleModel::class, 'brainstorm_id');
    }

    public function project(): BelongsTo
    {
        return $this->belongsTo(ProjectModel::class, 'project_id');
    }
}
