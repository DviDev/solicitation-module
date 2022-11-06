<?php

namespace Modules\Solicitation\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Base\Models\BaseModel;
use Modules\Solicitation\Database\Factories\SolicitationCommentUpVotesFactory;
use Modules\Solicitation\Entities\SolicitationCommentUpVotes\SolicitationCommentUpVotesEntityModel;
use Modules\Solicitation\Entities\SolicitationCommentUpVotes\SolicitationCommentUpVotesProps;

/**
 * @author Davi Menezes (davimenezes.dev@gmail.com)
 * @link https://github.com/DaviMenezes
 * @method SolicitationCommentUpVotesEntityModel toEntity()
 * @method SolicitationCommentUpVotesFactory factory()
 */
class SolicitationCommentUpVotesModel extends BaseModel
{
    use HasFactory;
    use SolicitationCommentUpVotesProps;

    public function modelEntity(): string
    {
        return SolicitationCommentUpVotesEntityModel::class;
    }

    protected static function newFactory(): SolicitationCommentUpVotesFactory
    {
        return new SolicitationCommentUpVotesFactory();
    }

    public static function table($alias = null): string
    {
        return self::dbTable('solicitation_comment_up_votes', $alias);
    }
}
