<?php

namespace Modules\Solicitation\Entities;

use Modules\Base\Entities\BaseEntityModel;
use Modules\Solicitation\Repositories\SolicitationCommentDownVotesRepository;

/**
 * @author Davi Menezes (davimenezes.dev@gmail.com)
 * @link https://github.com/DaviMenezes
 * @property $id
 * @property $comment_id
 * @property $user_id
 * @property $created_at
 * @method static self props($alias = null, $force = null)
 * @method SolicitationCommentDownVotesRepository repository()
 */
class SolicitationCommentDownVotesEntityModel extends BaseEntityModel
{
    protected function repositoryClass(): string
    {
        return SolicitationCommentDownVotesRepository::class;
    }

    /**
     * @inheritDoc
     */
    public static function dbTable($alias = null)
    {
        return self::setTable('solicitation_comment_down_votes', $alias);
    }
}

