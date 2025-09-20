<?php

declare(strict_types=1);

namespace Modules\Solicitation\Models;

use Modules\Base\Contracts\BaseModel;
use Modules\Base\Factories\BaseFactory;
use Modules\Solicitation\Entities\SolicitationBrainstormModuleUserPermission\SolicitationBrainstormModuleUserPermissionEntityModel;
use Modules\Solicitation\Entities\SolicitationBrainstormModuleUserPermission\SolicitationBrainstormModuleUserPermissionProps;

/**
 * @author Davi Menezes (davimenezes.dev@gmail.com)
 *
 * @link https://github.com/DaviMenezes
 *
 * @method SolicitationBrainstormModuleUserPermissionEntityModel toEntity()
 */
final class SolicitationBrainstormModuleUserPermissionModel extends BaseModel
{
    use SolicitationBrainstormModuleUserPermissionProps;

    public static function table($alias = null): string
    {
        return self::dbTable('solicitation_module_user_permissions', $alias);
    }

    public function modelEntity(): string
    {
        return SolicitationBrainstormModuleUserPermissionEntityModel::class;
    }

    protected static function newFactory(): BaseFactory
    {
        return new class extends BaseFactory
        {
            protected $model = SolicitationBrainstormModuleUserPermissionModel::class;
        };
    }
}
