<?php

namespace Modules\Solicitation\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Modules\Base\Contracts\BaseModel;
use Modules\Base\Factories\BaseFactory;
use Modules\Solicitation\Entities\SolicitationBrainstormModuleRequest\SolicitationBrainstormModuleRequestEntityModel;
use Modules\Solicitation\Entities\SolicitationBrainstormModuleRequest\SolicitationBrainstormModuleRequestProps;
use Modules\Task\Models\TaskModel;

/**
 * @author Davi Menezes (davimenezes.dev@gmail.com)
 *
 * @link https://github.com/DaviMenezes
 *
 * @property-read User $solicitant
 * @property-read SolicitationBrainstormModuleModel $module
 *
 * @method SolicitationBrainstormModuleRequestEntityModel toEntity()
 */
class SolicitationBrainstormModuleRequestModel extends BaseModel
{
    use HasFactory;
    use SolicitationBrainstormModuleRequestProps;

    public function modelEntity(): string
    {
        return SolicitationBrainstormModuleRequestEntityModel::class;
    }

    protected static function newFactory(): BaseFactory
    {
        return new class extends BaseFactory
        {
            protected $model = SolicitationBrainstormModuleRequestModel::class;
        };
    }

    public static function table($alias = null): string
    {
        return self::dbTable('solicitation_brainstorm_module_requests', $alias);
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
        return $this->hasMany(SolicitationBrainstormModuleRequestCommentModel::class, 'solicitation_id');
    }

    public function files(): HasMany
    {
        return $this->hasMany(SolicitationBrainstormModuleRequestFileModel::class, 'solicitation_id');
    }

    public function groups()
    {
        //        return $this->
    }

    public function tasks(): BelongsToMany
    {
        return $this->belongsToMany(TaskModel::class, SolicitationBrainstormModuleRequestTaskModel::class, 'solicitation_id', 'task_id');
    }
}
