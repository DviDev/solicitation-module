<?php

namespace Modules\Solicitation\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Modules\Base\Contracts\BaseModel;
use Modules\Base\Factories\BaseFactory;
use Modules\Solicitation\Entities\SolicitationBrainstormModuleRequestTask\SolicitationBrainstormModuleRequestTaskEntityModel;
use Modules\Solicitation\Entities\SolicitationBrainstormModuleRequestTask\SolicitationBrainstormModuleRequestTaskProps;
use Modules\Task\Models\TaskModel;

/**
 * @author Davi Menezes (davimenezes.dev@gmail.com)
 *
 * @link https://github.com/DaviMenezes
 *
 * @method SolicitationBrainstormModuleRequestTaskEntityModel toEntity()
 */
class SolicitationBrainstormModuleRequestTaskModel extends BaseModel
{
    use SolicitationBrainstormModuleRequestTaskProps;

    public function modelEntity(): string
    {
        return SolicitationBrainstormModuleRequestTaskEntityModel::class;
    }

    protected static function newFactory(): BaseFactory
    {
        return new class extends BaseFactory {
            protected $model = SolicitationBrainstormModuleRequestTaskModel::class;
        };
    }

    public static function table($alias = null): string
    {
        return self::dbTable('solicitation_module_request_tasks', $alias);
    }

    public function solicitation(): BelongsTo
    {
        return $this->belongsTo(SolicitationBrainstormModuleRequestModel::class, 'solicitation_id');
    }

    public function task(): BelongsTo
    {
        return $this->belongsTo(TaskModel::class, 'task_id');
    }
}
