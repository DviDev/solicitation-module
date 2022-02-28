<?php

namespace Modules\Solicitation\Models;

use Modules\Base\Models\BaseModel;
use Modules\Solicitation\Entities\SolicitationBrainstormEntityModel;

/**
 * @author Davi Menezes (davimenezes.dev@gmail.com)
 * @link https://github.com/DaviMenezes
 * @method SolicitationBrainstormEntityModel toEntity()
 */
class SolicitationBrainstormModel extends BaseModel
{
    function modelEntity()
    {
        return SolicitationBrainstormEntityModel::class;
    }
}
