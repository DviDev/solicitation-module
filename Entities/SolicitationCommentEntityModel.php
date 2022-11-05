<?php

namespace Modules\Solicitation\Entities;

use Modules\Base\Entities\BaseEntityModel;
use Modules\Solicitation\Repositories\SolicitationCommentRepository;

/**
 * @author Davi Menezes (davimenezes.dev@gmail.com)
 * @link https://github.com/DaviMenezes
 * @property $id
 * @property $solicitation_id
 * @property $parent_id
 * @property $message
 * @property $user_id
 * @property $created_at
 * @method static self props($alias = null, $force = null)
 * @method SolicitationCommentRepository repository()
 */
class SolicitationCommentEntityModel extends BaseEntityModel
{
    protected function repositoryClass(): string
    {
        return SolicitationCommentRepository::class;
    }

    /**
     * @inheritDoc
     */
    public static function dbTable($alias = null)
    {
        return self::setTable('solicitation_comments', $alias);
    }
}

