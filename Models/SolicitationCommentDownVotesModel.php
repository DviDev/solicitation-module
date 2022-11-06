<?php

namespace Modules\Solicitation\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Base\Models\BaseModel;
use Modules\Solicitation\Database\Factories\SolicitationCommentDownVotesFactory;
use Modules\Solicitation\Entities\SolicitationCommentDownVotes\SolicitationCommentDownVotesEntityModel;
use Modules\Solicitation\Entities\SolicitationCommentDownVotes\SolicitationCommentDownVotesProps;

/**
 * @author Davi Menezes (davimenezes.dev@gmail.com)
 * @link https://github.com/DaviMenezes
 * @method SolicitationCommentDownVotesEntityModel toEntity()
 * @method SolicitationCommentDownVotesFactory factory()
 */
class SolicitationCommentDownVotesModel extends BaseModel
{
    use HasFactory;
    use SolicitationCommentDownVotesProps;

    public function modelEntity(): string
    {
        return SolicitationCommentDownVotesEntityModel::class;
    }

    protected static function newFactory(): SolicitationCommentDownVotesFactory
    {
        return new SolicitationCommentDownVotesFactory();
    }

    public static function table($alias = null): string
    {
        return self::dbTable('solicitation_comment_down_votes', $alias);
    }
}
