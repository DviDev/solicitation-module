<?php

namespace Modules\Solicitation\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Base\Models\BaseModel;
use Modules\Solicitation\Database\Factories\SolicitationCommentFactory;
use Modules\Solicitation\Entities\SolicitationComment\SolicitationCommentEntityModel;
use Modules\Solicitation\Entities\SolicitationComment\SolicitationCommentProps;

/**
 * @author Davi Menezes (davimenezes.dev@gmail.com)
 * @link https://github.com/DaviMenezes
 * @method SolicitationCommentEntityModel toEntity()
 * @method SolicitationCommentFactory factory()
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
}
