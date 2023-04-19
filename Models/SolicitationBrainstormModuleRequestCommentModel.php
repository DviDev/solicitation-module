<?php

namespace Modules\Solicitation\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Modules\Base\Models\BaseModel;
use Modules\Solicitation\Database\Factories\SolicitationBrainstormModuleRequestCommentFactory;
use Modules\Solicitation\Entities\SolicitationBrainstormModuleRequestComment\SolicitationBrainstormModuleRequestCommentEntityModel;
use Modules\Solicitation\Entities\SolicitationBrainstormModuleRequestComment\SolicitationBrainstormModuleRequestCommentProps;

/**
 * @author Davi Menezes (davimenezes.dev@gmail.com)
 * @link https://github.com/DaviMenezes
 * @property-read SolicitationBrainstormModuleRequestModel $solicitation
 * @property-read User $user
 * @method SolicitationBrainstormModuleRequestCommentEntityModel toEntity()
 * @method static SolicitationBrainstormModuleRequestCommentFactory factory()
 */
class SolicitationBrainstormModuleRequestCommentModel extends BaseModel
{
    use HasFactory;
    use SolicitationBrainstormModuleRequestCommentProps;

    public function modelEntity(): string
    {
        return SolicitationBrainstormModuleRequestCommentEntityModel::class;
    }

    protected static function newFactory(): SolicitationBrainstormModuleRequestCommentFactory
    {
        return new SolicitationBrainstormModuleRequestCommentFactory();
    }

    public static function table($alias = null): string
    {
        return self::dbTable('solicitation_brainstorm_module_request_comments', $alias);
    }

    public function solicitation(): BelongsTo
    {
        return $this->belongsTo(SolicitationBrainstormModuleRequestModel::class, 'solicitation_id');
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function votes(): HasMany
    {
        return $this->hasMany(SolicitationBrainstormModuleCommentRequestReactionModel::class, 'comment_id');
    }
}
