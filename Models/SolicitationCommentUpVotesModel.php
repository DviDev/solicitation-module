<?php

namespace Modules\Solicitation\Models;

use Modules\Base\Models\BaseModel;
use Modules\Solicitation\Entities\SolicitationCommentUpVotesEntityModel;

/**
 * @author Davi Menezes (davimenezes.dev@gmail.com)
 * @link https://github.com/DaviMenezes
 * @method SolicitationCommentUpVotesEntityModel toEntity()
 */
class SolicitationCommentUpVotesModel extends BaseModel
{
    function modelEntity()
    {
        return SolicitationCommentUpVotesEntityModel::class;
    }
}
