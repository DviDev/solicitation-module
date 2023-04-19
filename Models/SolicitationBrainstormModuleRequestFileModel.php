<?php

namespace Modules\Solicitation\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Base\Models\BaseModel;
use Modules\Solicitation\Database\Factories\SolicitationBrainstormModuleRequestFileFactory;
use Modules\Solicitation\Entities\SolicitationBrainstormModuleRequestFile\SolicitationBrainstormModuleRequestFileEntityModel;
use Modules\Solicitation\Entities\SolicitationBrainstormModuleRequestFile\SolicitationBrainstormModuleRequestFileProps;

/**
 * @author Davi Menezes (davimenezes.dev@gmail.com)
 * @link https://github.com/DaviMenezes
 * @method SolicitationBrainstormModuleRequestFileEntityModel toEntity()
 * @method static SolicitationBrainstormModuleRequestFileFactory factory()
 */
class SolicitationBrainstormModuleRequestFileModel extends BaseModel
{
    use HasFactory;
    use SolicitationBrainstormModuleRequestFileProps;

    public function modelEntity(): string
    {
        return SolicitationBrainstormModuleRequestFileEntityModel::class;
    }

    protected static function newFactory(): SolicitationBrainstormModuleRequestFileFactory
    {
        return new SolicitationBrainstormModuleRequestFileFactory();
    }

    public static function table($alias = null): string
    {
        return self::dbTable('solicitation_brainstorm_module_request_files', $alias);
    }
}
