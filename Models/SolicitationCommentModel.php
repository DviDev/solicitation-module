<?php

namespace Modules\Solicitation\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Modules\Base\Models\BaseModel;
use Modules\Solicitation\Database\Factories\SolicitationCommentFactory;
use Modules\Solicitation\Entities\SolicitationComment\SolicitationCommentEntityModel;
use Modules\Solicitation\Entities\SolicitationComment\SolicitationCommentProps;

/**
 * @author Davi Menezes (davimenezes.dev@gmail.com)
 * @link https://github.com/DaviMenezes
 * @property-read SolicitationModel $solicitation
 * @property-read User $user
 * @method SolicitationCommentEntityModel toEntity()
 * @method static SolicitationCommentFactory factory()
 */
class SolicitationCommentModel extends BaseModel
{
    use HasFactory;
    use SolicitationCommentProps;

    public function modelEntity(): string
    {
        return SolicitationCommentEntityModel::class;
    }

    protected static function newFactory(): SolicitationCommentFactory
    {
        return new SolicitationCommentFactory();
    }

    public static function table($alias = null): string
    {
        return self::dbTable('solicitation_comments', $alias);
    }

    public function solicitation(): BelongsTo
    {
        return $this->belongsTo(SolicitationModel::class, 'solicitation_id');
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
