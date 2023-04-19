<?php

namespace Modules\Solicitation\Entities\SolicitationBrainstormModuleRequestTask;

use Modules\Base\Entities\BaseEntityModel;
use Modules\Solicitation\Repositories\SolicitationBrainstormModuleRequestTaskRepository;
use Modules\Solicitation\Models\SolicitationBrainstormModuleRequestTaskModel;

/**
 * @author Davi Menezes (davimenezes.dev@gmail.com)
 * @link https://github.com/DaviMenezes
 * @property-read SolicitationBrainstormModuleRequestTaskModel $model
 * @method self save()
 * @method static self new()
 * @method static self props($alias = null, $force = null)
 * @method SolicitationBrainstormModuleRequestTaskRepository repository()
 */
class SolicitationBrainstormModuleRequestTaskEntityModel extends BaseEntityModel
{
    use SolicitationBrainstormModuleRequestTaskProps;

    protected function repositoryClass(): string
    {
        return SolicitationBrainstormModuleRequestTaskRepository::class;
    }
}
