<?php

namespace Modules\Solicitation\Entities\SolicitationModule;

use Modules\Base\Entities\BaseEntityModel;
use Modules\Solicitation\Repositories\SolicitationModuleRepository;
use Modules\Solicitation\Models\SolicitationModuleModel;

/**
 * @author Davi Menezes (davimenezes.dev@gmail.com)
 * @link https://github.com/DaviMenezes
 * @property-read SolicitationModuleModel $model
 * @method self save()
 * @method static self new()
 * @method static self props($alias = null, $force = null)
 * @method SolicitationModuleRepository repository()
 */
class SolicitationModuleEntityModel extends BaseEntityModel
{
    use SolicitationModuleProps;

    protected function repositoryClass(): string
    {
        return SolicitationModuleRepository::class;
    }
}
