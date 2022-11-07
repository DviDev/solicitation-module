<?php

namespace Modules\Solicitation\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Base\Models\BaseModel;
use Modules\Solicitation\Database\Factories\SolicitationBrainstormFactory;
use Modules\Solicitation\Entities\SolicitationBrainstorm\SolicitationBrainstormEntityModel;
use Modules\Solicitation\Entities\SolicitationBrainstorm\SolicitationBrainstormProps;

/**
 * @author Davi Menezes (davimenezes.dev@gmail.com)
 * @link https://github.com/DaviMenezes
 * @method SolicitationBrainstormEntityModel toEntity()
 * @method static SolicitationBrainstormFactory factory()
 */
class SolicitationBrainstormModel extends BaseModel
{
    use HasFactory;
    use SolicitationBrainstormProps;

    public function modelEntity(): string
    {
        return SolicitationBrainstormEntityModel::class;
    }

    protected static function newFactory(): SolicitationBrainstormFactory
    {
        return new SolicitationBrainstormFactory();
    }

    public static function table($alias = null): string
    {
        return self::dbTable('solicitation_brainstorms', $alias);
    }
}
