<?php

namespace Modules\Solicitation\Entities\SolicitationBrainstormModuleRequestComment;

use Modules\Base\Entities\BaseEntityModel;
use Modules\Solicitation\Repositories\SolicitationBrainstormModuleRequestCommentRepository;
use Modules\Solicitation\Models\SolicitationBrainstormModuleRequestCommentModel;

/**
 * @author Davi Menezes (davimenezes.dev@gmail.com)
 * @link https://github.com/DaviMenezes
 * @property-read SolicitationBrainstormModuleRequestCommentModel $model
 * @method self save()
 * @method static self new()
 * @method static self props($alias = null, $force = null)
 * @method SolicitationBrainstormModuleRequestCommentRepository repository()
 */
class SolicitationBrainstormModuleRequestCommentEntityModel extends BaseEntityModel
{
    use SolicitationBrainstormModuleRequestCommentProps;

    protected function repositoryClass(): string
    {
        return SolicitationBrainstormModuleRequestCommentRepository::class;
    }
}
