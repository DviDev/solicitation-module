<?php

namespace Modules\Solicitation\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Modules\Base\Models\BaseModel;
use Modules\Solicitation\Database\Factories\SolicitationFactory;
use Modules\Solicitation\Entities\Solicitation\SolicitationEntityModel;
use Modules\Solicitation\Entities\Solicitation\SolicitationProps;
use Modules\Task\Models\TaskModel;

/**
 * @author Davi Menezes (davimenezes.dev@gmail.com)
 * @link https://github.com/DaviMenezes
 * @property-read User $solicitant
 * @property-read SolicitationBrainstormModuleModel $module
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
        return $this->belongsTo(User::class, 'requester_id');
    }
    public function module(): BelongsTo
    {
        return $this->belongsTo(SolicitationBrainstormModuleModel::class, 'module_id');
    }

    public function comments(): HasMany
    {
        return $this->hasMany(SolicitationCommentModel::class, 'solicitation_id');
    }

    public function files(): HasMany
    {
        return $this->hasMany(SolicitationFilesModel::class, 'solicitation_id');
    }

    public function groups()
    {
//        return $this->
    }

    public function tasks(): BelongsToMany
    {
        return $this->belongsToMany(TaskModel::class, SolicitationTaskModel::class, 'task_id', 'solicitation_id');
    }
}
