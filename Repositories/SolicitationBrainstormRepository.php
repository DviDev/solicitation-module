<?php

namespace Modules\Solicitation\Repositories;

use Modules\Base\Repository\BaseRepository;
use Modules\Solicitation\Entities\SolicitationBrainstorm\SolicitationBrainstormEntityModel;
use Modules\Solicitation\Models\SolicitationBrainstormModel;

/**
 * @author Davi Menezes(davimenezes.dev@gmail.com)
 *
 * @link https://github.com/DaviMenezes
 *
 * @method self obj()
 * @method SolicitationBrainstormModel model()
 * @method SolicitationBrainstormEntityModel find($id)
 * @method SolicitationBrainstormModel first()
 * @method SolicitationBrainstormModel findOrNew($id)
 * @method SolicitationBrainstormModel firstOrNew($query)
 * @method SolicitationBrainstormEntityModel findOrFail($id)
 */
class SolicitationBrainstormRepository extends BaseRepository
{
    /**
     * {@inheritDoc}
     */
    public function modelClass(): string
    {
        return SolicitationBrainstormModel::class;
    }
}
