<?php

namespace Modules\Solicitation\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Modules\Base\Models\BaseModel;
use Modules\Solicitation\Database\Factories\SolicitationCommentVoteFactory;
use Modules\Solicitation\Entities\SolicitationCommentVote\SolicitationCommentVoteEntityModel;
use Modules\Solicitation\Entities\SolicitationCommentVote\SolicitationCommentVoteProps;

/**
 * @author Davi Menezes (davimenezes.dev@gmail.com)
 * @link https://github.com/DaviMenezes
 * @property-read SolicitationCommentModel $comment
 * @property-read User $user
 * @method SolicitationCommentVoteEntityModel toEntity()
 * @method static SolicitationCommentVoteFactory factory()
 */
class SolicitationCommentVoteModel extends BaseModel
{
    use HasFactory;
    use SolicitationCommentVoteProps;

    public function modelEntity(): string
    {
        return SolicitationCommentVoteEntityModel::class;
    }

    protected static function newFactory(): SolicitationCommentVoteFactory
    {
        return new SolicitationCommentVoteFactory();
    }

    public static function table($alias = null): string
    {
        return self::dbTable('solicitation_comment_votes', $alias);
    }

    public function comment(): BelongsTo
    {
        return $this->belongsTo(SolicitationCommentModel::class, 'comment_id');
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
