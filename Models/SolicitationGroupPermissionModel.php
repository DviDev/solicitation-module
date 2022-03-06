<?php

namespace Modules\Solicitation\Models;

use Modules\Base\Models\BaseModel;
use Modules\Solicitation\Entities\SolicitationGroupPermissionEntityModel;

/**
 * @author Davi Menezes (davimenezes.dev@gmail.com)
 * @link https://github.com/DaviMenezes
 * @method SolicitationGroupPermissionEntityModel toEntity()
 */
class SolicitationGroupPermissionModel extends BaseModel
{
    function modelEntity()
    {
        return SolicitationGroupPermissionEntityModel::class;
    }
}
