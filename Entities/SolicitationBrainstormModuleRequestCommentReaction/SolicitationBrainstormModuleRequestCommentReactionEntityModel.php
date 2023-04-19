<?php

namespace Modules\Solicitation\Entities\SolicitationBrainstormModuleRequestCommentReaction;

use Modules\Base\Entities\BaseEntityModel;
use Modules\Solicitation\Entities\SolicitationBrainstormModuleRequestCommentReaction\SolicitationBrainstormModuleRequestCommentReactionProps;
use Modules\Solicitation\Repositories\SolicitationBrainstormModuleRequestCommentReactionRepository;
use Modules\Solicitation\Models\SolicitationBrainstormModuleCommentRequestReactionModel;

/**
 * @author Davi Menezes (davimenezes.dev@gmail.com)
 * @link https://github.com/DaviMenezes
 * @property-read SolicitationBrainstormModuleCommentRequestReactionModel $model
 * @method self save()
 * @method static self new()
 * @method static self props($alias = null, $force = null)
 * @method SolicitationBrainstormModuleRequestCommentReactionRepository repository()
 */
class SolicitationBrainstormModuleRequestCommentReactionEntityModel extends BaseEntityModel
{
    use SolicitationBrainstormModuleRequestCommentReactionProps;

    protected function repositoryClass(): string
    {
        return SolicitationBrainstormModuleRequestCommentReactionRepository::class;
    }
}
