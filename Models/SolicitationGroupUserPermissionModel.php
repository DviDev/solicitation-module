<?php

namespace Modules\Solicitation\Models;

use Modules\Base\Models\BaseModel;
use Modules\Solicitation\Entities\SolicitationGroupUserPermissionEntityModel;

/**
 * @author Davi Menezes (davimenezes.dev@gmail.com)
 * @link https://github.com/DaviMenezes
 * @method SolicitationGroupUserPermissionEntityModel toEntity()
 */
class SolicitationGroupUserPermissionModel extends BaseModel
{
    function modelEntity()
    {
        return SolicitationGroupUserPermissionEntityModel::class;
    }
}
