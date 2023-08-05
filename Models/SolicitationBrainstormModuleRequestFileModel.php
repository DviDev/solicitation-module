<?php

namespace Modules\Solicitation\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Base\Factories\BaseFactory;
use Modules\Base\Models\BaseModel;
use Modules\Solicitation\Entities\SolicitationBrainstormModuleRequestFile\SolicitationBrainstormModuleRequestFileEntityModel;
use Modules\Solicitation\Entities\SolicitationBrainstormModuleRequestFile\SolicitationBrainstormModuleRequestFileProps;

/**
 * @author Davi Menezes (davimenezes.dev@gmail.com)
 * @link https://github.com/DaviMenezes
 * @method SolicitationBrainstormModuleRequestFileEntityModel toEntity()
 */
class SolicitationBrainstormModuleRequestFileModel extends BaseModel
{
    use HasFactory;
    use SolicitationBrainstormModuleRequestFileProps;

    public function modelEntity(): string
    {
        return SolicitationBrainstormModuleRequestFileEntityModel::class;
    }

    protected static function newFactory(): BaseFactory
    {
        return new class extends BaseFactory {
            protected $model = SolicitationBrainstormModuleRequestFileModel::class;
        };
    }

    public static function table($alias = null): string
    {
        return self::dbTable('solicitation_brainstorm_module_request_files', $alias);
    }
}
