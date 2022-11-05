<?php

namespace Modules\Solicitation\Models;

use Modules\Base\Models\BaseModel;
use Modules\Solicitation\Entities\SolicitationFilesEntityModel;

/**
 * @author Davi Menezes (davimenezes.dev@gmail.com)
 * @link https://github.com/DaviMenezes
 * @method SolicitationFilesEntityModel toEntity()
 */
class SolicitationFilesModel extends BaseModel
{
    function modelEntity()
    {
        return SolicitationFilesEntityModel::class;
    }
}
