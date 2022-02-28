<?php

namespace Modules\Solicitation\Entities;

use Modules\Base\Entities\BaseEntityModel;
use Modules\Solicitation\Repositories\SolicitationGroupUserPermissionRepository;

/**
 * @author Davi Menezes (davimenezes.dev@gmail.com)
 * @link https://github.com/DaviMenezes
 * @property $id
 * @property $group_id
 * @property $user_id
 * @property $type
 * @method static self props($alias = null, $force = null)
 * @method SolicitationGroupUserPermissionRepository repository()
 */
class SolicitationGroupUserPermissionEntityModel extends BaseEntityModel
{
    protected function repositoryClass(): string
    {
        return SolicitationGroupUserPermissionRepository::class;
    }

    /**
     * @inheritDoc
     */
    public static function dbTable($alias = null)
    {
        return self::setTable('solicitation_group_user_permissions', $alias);
    }
}

