<?php

declare(strict_types=1);

namespace Modules\Solicitation\Models;

use Modules\Base\Contracts\BaseModel;
use Modules\Base\Factories\BaseFactory;
use Modules\Solicitation\Entities\SolicitationBrainstormModuleRequestFile\SolicitationBrainstormModuleRequestFileEntityModel;
use Modules\Solicitation\Entities\SolicitationBrainstormModuleRequestFile\SolicitationBrainstormModuleRequestFileProps;

/**
 * @author Davi Menezes (davimenezes.dev@gmail.com)
 *
 * @link https://github.com/DaviMenezes
 *
 * @method SolicitationBrainstormModuleRequestFileEntityModel toEntity()
 */
final class SolicitationBrainstormModuleRequestFileModel extends BaseModel
{
    use SolicitationBrainstormModuleRequestFileProps;

    public static function table($alias = null): string
    {
        return self::dbTable('solicitation_module_request_files', $alias);
    }

    public function modelEntity(): string
    {
        return SolicitationBrainstormModuleRequestFileEntityModel::class;
    }

    protected static function newFactory(): BaseFactory
    {
        return new class extends BaseFactory
        {
            protected $model = SolicitationBrainstormModuleRequestFileModel::class;
        };
    }
}
