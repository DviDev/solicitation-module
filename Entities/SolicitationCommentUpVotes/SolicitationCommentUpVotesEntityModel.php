<?php

namespace Modules\Solicitation\Entities\SolicitationCommentUpVotes;

use Modules\Base\Entities\BaseEntityModel;
use Modules\Solicitation\Repositories\SolicitationCommentUpVotesRepository;
use Modules\Solicitation\Models\SolicitationCommentUpVotesModel;

/**
 * @author Davi Menezes (davimenezes.dev@gmail.com)
 * @link https://github.com/DaviMenezes
 * @property-read SolicitationCommentUpVotesModel $model
 * @method self save()
 * @method static self new()
 * @method static self props($alias = null, $force = null)
 * @method SolicitationCommentUpVotesRepository repository()
 */
class SolicitationCommentUpVotesEntityModel extends BaseEntityModel
{
    use SolicitationCommentUpVotesProps;

    protected function repositoryClass(): string
    {
        return SolicitationCommentUpVotesRepository::class;
    }
}
