<?php

namespace Modules\Solicitation\Repositories;

use Modules\Base\Repository\BaseRepository;
use Modules\Solicitation\Entities\SolicitationBrainstormModuleGroup\SolicitationBrainstormModuleGroupEntityModel;
use Modules\Solicitation\Models\SolicitationBrainstormModuleGroupModel;

/**
 * @author Davi Menezes(davimenezes.dev@gmail.com)
 * @link https://github.com/DaviMenezes
 * @method self obj()
 * @method SolicitationBrainstormModuleGroupModel model()
 * @method SolicitationBrainstormModuleGroupEntityModel find($id)
 * @method SolicitationBrainstormModuleGroupModel first()
 * @method SolicitationBrainstormModuleGroupModel findOrNew($id)
 * @method SolicitationBrainstormModuleGroupModel firstOrNew($query)
 * @method SolicitationBrainstormModuleGroupEntityModel findOrFail($id)
 */
class SolicitationBrainstormModuleGroupRepository extends BaseRepository
{
    /**
     * @inheritDoc
     */
    public function modelClass(): string
    {
        return SolicitationBrainstormModuleGroupModel::class;
    }
}
