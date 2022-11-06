<?php

namespace Modules\Solicitation\Entities\SolicitationFiles;

use Modules\Base\Entities\BaseEntityModel;
use Modules\Solicitation\Repositories\SolicitationFilesRepository;
use Modules\Solicitation\Models\SolicitationFilesModel;

/**
 * @author Davi Menezes (davimenezes.dev@gmail.com)
 * @link https://github.com/DaviMenezes
 * @property-read SolicitationFilesModel $model
 * @method self save()
 * @method static self new()
 * @method static self props($alias = null, $force = null)
 * @method SolicitationFilesRepository repository()
 */
class SolicitationFilesEntityModel extends BaseEntityModel
{
    use SolicitationFilesProps;

    protected function repositoryClass(): string
    {
        return SolicitationFilesRepository::class;
    }
}
