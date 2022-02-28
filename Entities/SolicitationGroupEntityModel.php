<?php

namespace Modules\Solicitation\Entities;

use Modules\Base\Entities\BaseEntityModel;
use Modules\Solicitation\Repositories\SolicitationGroupRepository;

/**
 * @author Davi Menezes (davimenezes.dev@gmail.com)
 * @link https://github.com/DaviMenezes
 * @property $id
 * @property $module_id
 * @property $name
 * @property $description
 * @method static self props($alias = null, $force = null)
 * @method SolicitationGroupRepository repository()
 */
class SolicitationGroupEntityModel extends BaseEntityModel
{
    protected function repositoryClass(): string
    {
        return SolicitationGroupRepository::class;
    }

    /**
     * @inheritDoc
     */
    public static function dbTable($alias = null)
    {
        return self::setTable('solicitation_groups', $alias);
    }
}

