<?php

namespace Modules\Solicitation\Entities\SolicitationCommentDownVotes;

use Modules\Base\Entities\BaseEntityModel;
use Modules\Solicitation\Repositories\SolicitationCommentDownVotesRepository;
use Modules\Solicitation\Models\SolicitationCommentDownVotesModel;

/**
 * @author Davi Menezes (davimenezes.dev@gmail.com)
 * @link https://github.com/DaviMenezes
 * @property-read SolicitationCommentDownVotesModel $model
 * @method self save()
 * @method static self new()
 * @method static self props($alias = null, $force = null)
 * @method SolicitationCommentDownVotesRepository repository()
 */
class SolicitationCommentDownVotesEntityModel extends BaseEntityModel
{
    use SolicitationCommentDownVotesProps;

    protected function repositoryClass(): string
    {
        return SolicitationCommentDownVotesRepository::class;
    }
}
