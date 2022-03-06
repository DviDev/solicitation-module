<?php

namespace Modules\Solicitation\Models;

use Modules\Base\Models\BaseModel;
use Modules\Solicitation\Entities\SolicitationModuleUserPermissionEntityModel;

/**
 * @author Davi Menezes (davimenezes.dev@gmail.com)
 * @link https://github.com/DaviMenezes
 * @method SolicitationModuleUserPermissionEntityModel toEntity()
 */
class SolicitationModuleUserPermissionModel extends BaseModel
{
    function modelEntity()
    {
        return SolicitationModuleUserPermissionEntityModel::class;
    }
}
