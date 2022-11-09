<?php

namespace Modules\Solicitation\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Modules\Base\Models\BaseModel;
use Modules\Solicitation\Database\Factories\SolicitationTaskFactory;
use Modules\Solicitation\Entities\SolicitationTask\SolicitationTaskEntityModel;
use Modules\Solicitation\Entities\SolicitationTask\SolicitationTaskProps;
use Modules\Task\Models\TaskModel;

/**
 * @author Davi Menezes (davimenezes.dev@gmail.com)
 * @link https://github.com/DaviMenezes
 * @method SolicitationTaskEntityModel toEntity()
 * @method static SolicitationTaskFactory factory()
 */
class SolicitationTaskModel extends BaseModel
{
    use HasFactory;
    use SolicitationTaskProps;

    public function modelEntity(): string
    {
        return SolicitationTaskEntityModel::class;
    }

    protected static function newFactory(): SolicitationTaskFactory
    {
        return new SolicitationTaskFactory();
    }

    public static function table($alias = null): string
    {
        return self::dbTable('solicitation_tasks', $alias);
    }

    public function solicitation(): BelongsTo
    {
        return $this->belongsTo(SolicitationModel::class, 'solicitation_id');
    }

    public function task(): BelongsTo
    {
        return $this->belongsTo(TaskModel::class, 'task_id');
    }
}
