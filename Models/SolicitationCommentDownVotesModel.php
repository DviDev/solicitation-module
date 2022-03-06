<?php

namespace Modules\Solicitation\Models;

use Modules\Base\Models\BaseModel;
use Modules\Solicitation\Entities\SolicitationCommentDownVotesEntityModel;

/**
 * @author Davi Menezes (davimenezes.dev@gmail.com)
 * @link https://github.com/DaviMenezes
 * @method SolicitationCommentDownVotesEntityModel toEntity()
 */
class SolicitationCommentDownVotesModel extends BaseModel
{
    function modelEntity()
    {
        return SolicitationCommentDownVotesEntityModel::class;
    }
}
