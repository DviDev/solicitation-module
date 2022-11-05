<?php

namespace Modules\Solicitation\Models;

use Modules\Base\Models\BaseModel;
use Modules\Solicitation\Entities\SolicitationCommentEntityModel;

/**
 * @author Davi Menezes (davimenezes.dev@gmail.com)
 * @link https://github.com/DaviMenezes
 * @method SolicitationCommentEntityModel toEntity()
 */
class SolicitationCommentModel extends BaseModel
{
    function modelEntity()
    {
        return SolicitationCommentEntityModel::class;
    }
}
