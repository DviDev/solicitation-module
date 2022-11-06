<?php

namespace Modules\Solicitation\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Base\Models\BaseModel;
use Modules\Solicitation\Database\Factories\SolicitationFilesFactory;
use Modules\Solicitation\Entities\SolicitationFiles\SolicitationFilesEntityModel;
use Modules\Solicitation\Entities\SolicitationFiles\SolicitationFilesProps;

/**
 * @author Davi Menezes (davimenezes.dev@gmail.com)
 * @link https://github.com/DaviMenezes
 * @method SolicitationFilesEntityModel toEntity()
 * @method SolicitationFilesFactory factory()
 */
class SolicitationFilesModel extends BaseModel
{
    use HasFactory;
    use SolicitationFilesProps;

    public function modelEntity(): string
    {
        return SolicitationFilesEntityModel::class;
    }

    protected static function newFactory(): SolicitationFilesFactory
    {
        return new SolicitationFilesFactory();
    }

    public static function table($alias = null): string
    {
        return self::dbTable('solicitation_files', $alias);
    }
}
