<?php

namespace Modules\Solicitation\Repositories;

use Modules\Base\Repository\BaseRepository;
use Modules\Solicitation\Entities\SolicitationBrainstormModuleRequest\SolicitationBrainstormModuleRequestEntityModel;
use Modules\Solicitation\Models\SolicitationBrainstormModuleRequestModel;

/**
 * @author Davi Menezes(davimenezes.dev@gmail.com)
 *
 * @link https://github.com/DaviMenezes
 *
 * @method self obj()
 * @method SolicitationBrainstormModuleRequestModel model()
 * @method SolicitationBrainstormModuleRequestEntityModel find($id)
 * @method SolicitationBrainstormModuleRequestModel first()
 * @method SolicitationBrainstormModuleRequestModel findOrNew($id)
 * @method SolicitationBrainstormModuleRequestModel firstOrNew($query)
 * @method SolicitationBrainstormModuleRequestEntityModel findOrFail($id)
 */
class SolicitationBrainstormModuleRequestRepository extends BaseRepository
{
    /**
     * {@inheritDoc}
     */
    public function modelClass(): string
    {
        return SolicitationBrainstormModuleRequestModel::class;
    }
}
