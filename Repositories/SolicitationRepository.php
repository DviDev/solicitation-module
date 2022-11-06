<?php

namespace Modules\Solicitation\Repositories;

use Modules\Base\Repository\BaseRepository;
use Modules\Solicitation\Entities\Solicitation\SolicitationEntityModel;
use Modules\Solicitation\Models\SolicitationModel;

/**
 * @author Davi Menezes(davimenezes.dev@gmail.com)
 * @link https://github.com/DaviMenezes
 * @method self obj()
 * @method SolicitationModel model()
 * @method SolicitationEntityModel find($id)
 * @method SolicitationModel first()
 * @method SolicitationModel findOrNew($id)
 * @method SolicitationModel firstOrNew($query)
 * @method SolicitationEntityModel findOrFail($id)
 */
class SolicitationRepository extends BaseRepository
{
    /**
     * @inheritDoc
     */
    public function modelClass(): string
    {
        return SolicitationModel::class;
    }
}
