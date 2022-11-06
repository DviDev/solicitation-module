<?php

namespace Modules\Solicitation\Repositories;

use Modules\Base\Repository\BaseRepository;
use Modules\Solicitation\Entities\SolicitationModule\SolicitationModuleEntityModel;
use Modules\Solicitation\Models\SolicitationModuleModel;

/**
 * @author Davi Menezes(davimenezes.dev@gmail.com)
 * @link https://github.com/DaviMenezes
 * @method self obj()
 * @method SolicitationModuleModel model()
 * @method SolicitationModuleEntityModel find($id)
 * @method SolicitationModuleModel first()
 * @method SolicitationModuleModel findOrNew($id)
 * @method SolicitationModuleModel firstOrNew($query)
 * @method SolicitationModuleEntityModel findOrFail($id)
 */
class SolicitationModuleRepository extends BaseRepository
{
    /**
     * @inheritDoc
     */
    public function modelClass(): string
    {
        return SolicitationModuleModel::class;
    }
}
