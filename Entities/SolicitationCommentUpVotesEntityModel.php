<?php

namespace Modules\Solicitation\Entities;

use Modules\Base\Entities\BaseEntityModel;
use Modules\Solicitation\Repositories\SolicitationCommentUpVotesRepository;

/**
 * @author Davi Menezes (davimenezes.dev@gmail.com)
 * @link https://github.com/DaviMenezes
 * @property $id
 * @property $comment_id
 * @property $user_id
 * @property $created_at
 * @method static self props($alias = null, $force = null)
 * @method SolicitationCommentUpVotesRepository repository()
 */
class SolicitationCommentUpVotesEntityModel extends BaseEntityModel
{
    protected function repositoryClass(): string
    {
        return SolicitationCommentUpVotesRepository::class;
    }

    /**
     * @inheritDoc
     */
    public static function dbTable($alias = null)
    {
        return self::setTable('solicitation_comment_up_votes', $alias);
    }
}

