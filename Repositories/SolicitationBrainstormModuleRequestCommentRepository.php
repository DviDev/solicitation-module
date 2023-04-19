<?php

namespace Modules\Solicitation\Repositories;

use Modules\Base\Repository\BaseRepository;
use Modules\Solicitation\Entities\SolicitationBrainstormModuleRequestComment\SolicitationBrainstormModuleRequestCommentEntityModel;
use Modules\Solicitation\Models\SolicitationBrainstormModuleRequestCommentModel;

/**
 * @author Davi Menezes(davimenezes.dev@gmail.com)
 * @link https://github.com/DaviMenezes
 * @method self obj()
 * @method SolicitationBrainstormModuleRequestCommentModel model()
 * @method SolicitationBrainstormModuleRequestCommentEntityModel find($id)
 * @method SolicitationBrainstormModuleRequestCommentModel first()
 * @method SolicitationBrainstormModuleRequestCommentModel findOrNew($id)
 * @method SolicitationBrainstormModuleRequestCommentModel firstOrNew($query)
 * @method SolicitationBrainstormModuleRequestCommentEntityModel findOrFail($id)
 */
class SolicitationBrainstormModuleRequestCommentRepository extends BaseRepository
{
    /**
     * @inheritDoc
     */
    public function modelClass(): string
    {
        return SolicitationBrainstormModuleRequestCommentModel::class;
    }
}
