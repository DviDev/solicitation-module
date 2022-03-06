<?php

namespace Modules\Solicitation\Models;

use Modules\Base\Models\BaseModel;
use Modules\Solicitation\Entities\SolicitationTaskEntityModel;

/**
 * @author Davi Menezes (davimenezes.dev@gmail.com)
 * @link https://github.com/DaviMenezes
 * @method SolicitationTaskEntityModel toEntity()
 */
class SolicitationTaskModel extends BaseModel
{
    function modelEntity()
    {
        return SolicitationTaskEntityModel::class;
    }
}
