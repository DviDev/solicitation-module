<?php

namespace Modules\Solicitation\Entities\SolicitationCommentVote;

use Modules\Base\Entities\BaseEntityModel;
use Modules\Solicitation\Entities\SolicitationCommentVote\SolicitationCommentVoteProps;
use Modules\Solicitation\Repositories\SolicitationCommentVoteRepository;
use Modules\Solicitation\Models\SolicitationCommentVoteModel;

/**
 * @author Davi Menezes (davimenezes.dev@gmail.com)
 * @link https://github.com/DaviMenezes
 * @property-read SolicitationCommentVoteModel $model
 * @method self save()
 * @method static self new()
 * @method static self props($alias = null, $force = null)
 * @method SolicitationCommentVoteRepository repository()
 */
class SolicitationCommentVoteEntityModel extends BaseEntityModel
{
    use SolicitationCommentVoteProps;

    protected function repositoryClass(): string
    {
        return SolicitationCommentVoteRepository::class;
    }
}
