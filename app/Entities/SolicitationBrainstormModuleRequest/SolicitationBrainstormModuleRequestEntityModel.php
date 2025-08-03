<?php

namespace Modules\Solicitation\Entities\SolicitationBrainstormModuleRequest;

use Modules\Base\Entities\BaseEntityModel;
use Modules\Solicitation\Models\SolicitationBrainstormModuleRequestModel;
use Modules\Solicitation\Repositories\SolicitationBrainstormModuleRequestRepository;

/**
 * @author Davi Menezes (davimenezes.dev@gmail.com)
 *
 * @link https://github.com/DaviMenezes
 *
 * @property-read SolicitationBrainstormModuleRequestModel $model
 *
 * @method self save()
 * @method static self new()
 * @method static self props($alias = null, $force = null)
 * @method SolicitationBrainstormModuleRequestRepository repository()
 */
class SolicitationBrainstormModuleRequestEntityModel extends BaseEntityModel
{
    use SolicitationBrainstormModuleRequestProps;

    protected function repositoryClass(): string
    {
        return SolicitationBrainstormModuleRequestRepository::class;
    }
}
