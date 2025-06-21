<?php

namespace Modules\Solicitation\Repositories;

use Modules\Base\Repository\BaseRepository;
use Modules\Solicitation\Entities\SolicitationBrainstormModuleRequestTask\SolicitationBrainstormModuleRequestTaskEntityModel;
use Modules\Solicitation\Models\SolicitationBrainstormModuleRequestTaskModel;

/**
 * @author Davi Menezes(davimenezes.dev@gmail.com)
 *
 * @link https://github.com/DaviMenezes
 *
 * @method self obj()
 * @method SolicitationBrainstormModuleRequestTaskModel model()
 * @method SolicitationBrainstormModuleRequestTaskEntityModel find($id)
 * @method SolicitationBrainstormModuleRequestTaskModel first()
 * @method SolicitationBrainstormModuleRequestTaskModel findOrNew($id)
 * @method SolicitationBrainstormModuleRequestTaskModel firstOrNew($query)
 * @method SolicitationBrainstormModuleRequestTaskEntityModel findOrFail($id)
 */
class SolicitationBrainstormModuleRequestTaskRepository extends BaseRepository
{
    /**
     * {@inheritDoc}
     */
    public function modelClass(): string
    {
        return SolicitationBrainstormModuleRequestTaskModel::class;
    }
}
