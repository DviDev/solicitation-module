<?php

namespace Modules\Solicitation\Repositories;

use Modules\Base\Repository\BaseRepository;
use Modules\Solicitation\Entities\SolicitationFilesEntityModel;
use Modules\Solicitation\Models\SolicitationFilesModel;

/**
 * @author Davi Menezes(davimenezes.dev@gmail.com)
 * @link https://github.com/DaviMenezes
 * @method self obj()
 * @method SolicitationFilesModel model()
 * @method SolicitationFilesEntityModel find($id)
 * @method SolicitationFilesModel first()
 * @method SolicitationFilesModel findOrNew($id)
 * @method SolicitationFilesModel firstOrNew($query)
 * @method SolicitationFilesEntityModel findOrFail($id)
 */
class SolicitationFilesRepository extends BaseRepository
{
    /**
     * @inheritDoc
     */
    public function modelClass(): string
    {
        return SolicitationFilesModel::class;
    }
}
