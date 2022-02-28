<?php

namespace Modules\Solicitation\Models;

use Modules\Base\Models\BaseModel;
use Modules\Solicitation\Entities\SolicitationModuleEntityModel;

/**
 * @author Davi Menezes (davimenezes.dev@gmail.com)
 * @link https://github.com/DaviMenezes
 * @method SolicitationModuleEntityModel toEntity()
 */
class SolicitationModuleModel extends BaseModel
{
    function modelEntity()
    {
        return SolicitationModuleEntityModel::class;
    }
}
