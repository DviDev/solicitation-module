<?php

namespace Modules\Solicitation\Entities;

use Modules\Base\Entities\BaseEntityModel;
use Modules\Solicitation\Repositories\SolicitationModuleUserPermissionRepository;

/**
 * @author Davi Menezes (davimenezes.dev@gmail.com)
 * @link https://github.com/DaviMenezes
 * @property $id
 * @property $user_id
 * @property $module_id
 * @property $type
 * @method static self props($alias = null, $force = null)
 * @method SolicitationModuleUserPermissionRepository repository()
 */
class SolicitationModuleUserPermissionEntityModel extends BaseEntityModel
{
    protected function repositoryClass(): string
    {
        return SolicitationModuleUserPermissionRepository::class;
    }

    /**
     * @inheritDoc
     */
    public static function dbTable($alias = null)
    {
        return self::setTable('solicitation_module_user_permissions', $alias);
    }
}

