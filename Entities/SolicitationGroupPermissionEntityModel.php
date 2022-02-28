<?php

namespace Modules\Solicitation\Entities;

use Modules\Base\Entities\BaseEntityModel;
use Modules\Solicitation\Repositories\SolicitationGroupPermissionRepository;

/**
 * @author Davi Menezes (davimenezes.dev@gmail.com)
 * @link https://github.com/DaviMenezes
 * @property $id
 * @property $group_id
 * @property $permission
 * @method static self props($alias = null, $force = null)
 * @method SolicitationGroupPermissionRepository repository()
 */
class SolicitationGroupPermissionEntityModel extends BaseEntityModel
{
    protected function repositoryClass(): string
    {
        return SolicitationGroupPermissionRepository::class;
    }

    /**
     * @inheritDoc
     */
    public static function dbTable($alias = null)
    {
        return self::setTable('solicitation_group_permissions', $alias);
    }
}

