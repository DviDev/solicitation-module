<?php

namespace Modules\Solicitation\Repositories;

use Modules\Base\Repository\BaseRepository;
use Modules\Solicitation\Entities\SolicitationBrainstormModule\SolicitationBrainstormModuleEntityModel;
use Modules\Solicitation\Models\SolicitationBrainstormModuleModel;

/**
 * @author Davi Menezes(davimenezes.dev@gmail.com)
 * @link https://github.com/DaviMenezes
 * @method self obj()
 * @method SolicitationBrainstormModuleModel model()
 * @method SolicitationBrainstormModuleEntityModel find($id)
 * @method SolicitationBrainstormModuleModel first()
 * @method SolicitationBrainstormModuleModel findOrNew($id)
 * @method SolicitationBrainstormModuleModel firstOrNew($query)
 * @method SolicitationBrainstormModuleEntityModel findOrFail($id)
 */
class SolicitationModuleRepository extends BaseRepository
{
    /**
     * @inheritDoc
     */
    public function modelClass(): string
    {
        return SolicitationBrainstormModuleModel::class;
    }
}
