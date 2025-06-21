<?php

namespace Modules\Solicitation\Entities\SolicitationBrainstormModule;

use Modules\Base\Entities\BaseEntityModel;
use Modules\Solicitation\Models\SolicitationBrainstormModuleModel;
use Modules\Solicitation\Repositories\SolicitationModuleRepository;

/**
 * @author Davi Menezes (davimenezes.dev@gmail.com)
 *
 * @link https://github.com/DaviMenezes
 *
 * @property-read SolicitationBrainstormModuleModel $model
 *
 * @method self save()
 * @method static self new()
 * @method static self props($alias = null, $force = null)
 * @method SolicitationModuleRepository repository()
 */
class SolicitationBrainstormModuleEntityModel extends BaseEntityModel
{
    use SolicitationBrainstormModuleProps;

    protected function repositoryClass(): string
    {
        return SolicitationModuleRepository::class;
    }
}
