<?php

namespace Modules\Solicitation\Entities\SolicitationComment;

use Modules\Base\Entities\BaseEntityModel;
use Modules\Solicitation\Repositories\SolicitationCommentRepository;
use Modules\Solicitation\Models\SolicitationCommentModel;

/**
 * @author Davi Menezes (davimenezes.dev@gmail.com)
 * @link https://github.com/DaviMenezes
 * @property-read SolicitationCommentModel $model
 * @method self save()
 * @method static self new()
 * @method static self props($alias = null, $force = null)
 * @method SolicitationCommentRepository repository()
 */
class SolicitationCommentEntityModel extends BaseEntityModel
{
    use SolicitationCommentProps;

    protected function repositoryClass(): string
    {
        return SolicitationCommentRepository::class;
    }
}
