<?php

namespace Modules\Solicitation\Repositories;

use Modules\Base\Repository\BaseRepository;
use Modules\Solicitation\Entities\SolicitationBrainstormModuleRequestFile\SolicitationBrainstormModuleRequestFileEntityModel;
use Modules\Solicitation\Models\SolicitationBrainstormModuleRequestFileModel;

/**
 * @author Davi Menezes(davimenezes.dev@gmail.com)
 * @link https://github.com/DaviMenezes
 * @method self obj()
 * @method SolicitationBrainstormModuleRequestFileModel model()
 * @method SolicitationBrainstormModuleRequestFileEntityModel find($id)
 * @method SolicitationBrainstormModuleRequestFileModel first()
 * @method SolicitationBrainstormModuleRequestFileModel findOrNew($id)
 * @method SolicitationBrainstormModuleRequestFileModel firstOrNew($query)
 * @method SolicitationBrainstormModuleRequestFileEntityModel findOrFail($id)
 */
class SolicitationBrainstormModuleRequestFileRepository extends BaseRepository
{
    /**
     * @inheritDoc
     */
    public function modelClass(): string
    {
        return SolicitationBrainstormModuleRequestFileModel::class;
    }
}
