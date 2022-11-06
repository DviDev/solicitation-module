<?php

namespace Modules\Solicitation\Entities\SolicitationTask;

use Modules\Base\Entities\BaseEntityModel;
use Modules\Solicitation\Repositories\SolicitationTaskRepository;
use Modules\Solicitation\Models\SolicitationTaskModel;

/**
 * @author Davi Menezes (davimenezes.dev@gmail.com)
 * @link https://github.com/DaviMenezes
 * @property-read SolicitationTaskModel $model
 * @method self save()
 * @method static self new()
 * @method static self props($alias = null, $force = null)
 * @method SolicitationTaskRepository repository()
 */
class SolicitationTaskEntityModel extends BaseEntityModel
{
    use SolicitationTaskProps;

    protected function repositoryClass(): string
    {
        return SolicitationTaskRepository::class;
    }
}
