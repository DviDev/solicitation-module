<?php

namespace Modules\Solicitation\Models;

use Modules\Base\Models\BaseModel;
use Modules\Solicitation\Entities\SolicitationGroupEntityModel;

/**
 * @author Davi Menezes (davimenezes.dev@gmail.com)
 * @link https://github.com/DaviMenezes
 * @method SolicitationGroupEntityModel toEntity()
 */
class SolicitationGroupModel extends BaseModel
{
    function modelEntity()
    {
        return SolicitationGroupEntityModel::class;
    }
}
