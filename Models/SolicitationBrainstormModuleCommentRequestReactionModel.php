<?php

namespace Modules\Solicitation\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Modules\Base\Models\BaseModel;
use Modules\Solicitation\Database\Factories\SolicitationBrainstormModuleRequestCommentReactionFactory;
use Modules\Solicitation\Entities\SolicitationBrainstormModuleRequestCommentReaction\SolicitationBrainstormModuleRequestCommentReactionEntityModel;
use Modules\Solicitation\Entities\SolicitationBrainstormModuleRequestCommentReaction\SolicitationBrainstormModuleRequestCommentReactionProps;

/**
 * @author Davi Menezes (davimenezes.dev@gmail.com)
 * @link https://github.com/DaviMenezes
 * @property-read SolicitationBrainstormModuleRequestCommentModel $comment
 * @property-read User $user
 * @method SolicitationBrainstormModuleRequestCommentReactionEntityModel toEntity()
 * @method static SolicitationBrainstormModuleRequestCommentReactionFactory factory()
 */
class SolicitationBrainstormModuleCommentRequestReactionModel extends BaseModel
{
    use HasFactory;
    use SolicitationBrainstormModuleRequestCommentReactionProps;

    public function modelEntity(): string
    {
        return SolicitationBrainstormModuleRequestCommentReactionEntityModel::class;
    }

    protected static function newFactory(): SolicitationBrainstormModuleRequestCommentReactionFactory
    {
        return new SolicitationBrainstormModuleRequestCommentReactionFactory();
    }

    public static function table($alias = null): string
    {
        return self::dbTable('solicitation_brainstorm_module_request_comment_reactions', $alias);
    }

    public function comment(): BelongsTo
    {
        return $this->belongsTo(SolicitationBrainstormModuleRequestCommentModel::class, 'comment_id');
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
