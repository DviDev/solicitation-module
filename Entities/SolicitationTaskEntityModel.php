<?php

namespace Modules\Solicitation\Entities;

use Modules\Base\Entities\BaseEntityModel;
use Modules\Solicitation\Repositories\SolicitationTaskRepository;

/**
 * @author Davi Menezes (davimenezes.dev@gmail.com)
 * @link https://github.com/DaviMenezes
 * @property $id
 * @property $solicitation_id
 * @property $task_id
 * @method static self props($alias = null, $force = null)
 * @method SolicitationTaskRepository repository()
 */
class SolicitationTaskEntityModel extends BaseEntityModel
{
    protected function repositoryClass(): string
    {
        return SolicitationTaskRepository::class;
    }

    /**
     * @inheritDoc
     */
    public static function dbTable($alias = null)
    {
        return self::setTable('solicitation_tasks', $alias);
    }
}

