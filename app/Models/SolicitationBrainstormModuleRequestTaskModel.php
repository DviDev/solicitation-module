<?php

declare(strict_types=1);

namespace Modules\Solicitation\Models;

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
final class SolicitationBrainstormModuleRequestTaskModel extends BaseModel
{
    use SolicitationBrainstormModuleRequestTaskProps;

    public static function table($alias = null): string
    {
        return self::dbTable('solicitation_module_request_tasks', $alias);
    }

    public function modelEntity(): string
    {
        return SolicitationBrainstormModuleRequestTaskEntityModel::class;
    }

    public function solicitation(): BelongsTo
    {
        return $this->belongsTo(SolicitationBrainstormModuleRequestModel::class, 'solicitation_id');
    }

    public function task(): BelongsTo
    {
        return $this->belongsTo(TaskModel::class, 'task_id');
    }

    protected static function newFactory(): BaseFactory
    {
        return new class extends BaseFactory
        {
            protected $model = SolicitationBrainstormModuleRequestTaskModel::class;
        };
    }
}
