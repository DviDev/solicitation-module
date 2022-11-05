<?php

namespace Modules\Solicitation\Models;

use Modules\Base\Models\BaseModel;
use Modules\Solicitation\Entities\SolicitationEntityModel;

/**
 * @author Davi Menezes (davimenezes.dev@gmail.com)
 * @link https://github.com/DaviMenezes
 * @method SolicitationEntityModel toEntity()
 */
class SolicitationModel extends BaseModel
{
    function modelEntity()
    {
        return SolicitationEntityModel::class;
    }
}
