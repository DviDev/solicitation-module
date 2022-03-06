<?php

namespace Modules\Solicitation\Entities;

use Modules\Base\Entities\BaseEntityModel;
use Modules\Solicitation\Repositories\SolicitationRepository;

/**
 * @author Davi Menezes (davimenezes.dev@gmail.com)
 * @link https://github.com/DaviMenezes
 * @property $id
 * @property $solicitant_id
 * @property $name
 * @property $description
 * @property $solicitant_priority
 * @property $status
 * @property $num_order
 * @property $deadline
 * @property $solicitant_approval_at
 * @property $module_id
 * @property $created_at
 * @property $updated_at
 * @property $deleted_at
 * @method static self props($alias = null, $force = null)
 * @method SolicitationRepository repository()
 */
class SolicitationEntityModel extends BaseEntityModel
{
    protected function repositoryClass(): string
    {
        return SolicitationRepository::class;
    }

    /**
     * @inheritDoc
     */
    public static function dbTable($alias = null)
    {
        return self::setTable('solicitations', $alias);
    }
}

