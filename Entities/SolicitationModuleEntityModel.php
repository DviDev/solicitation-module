<?php

namespace Modules\Solicitation\Entities;

use Modules\Base\Entities\BaseEntityModel;
use Modules\Solicitation\Repositories\SolicitationModuleRepository;

/**
 * @author Davi Menezes (davimenezes.dev@gmail.com)
 * @link https://github.com/DaviMenezes
 * @property $id
 * @property $name
 * @property $description
 * @property $parent_id
 * @property $brainstorm_id
 * @method static self props($alias = null, $force = null)
 * @method SolicitationModuleRepository repository()
 */
class SolicitationModuleEntityModel extends BaseEntityModel
{
    protected function repositoryClass(): string
    {
        return SolicitationModuleRepository::class;
    }

    /**
     * @inheritDoc
     */
    public static function dbTable($alias = null)
    {
        return self::setTable('solicitation_modules', $alias);
    }
}

