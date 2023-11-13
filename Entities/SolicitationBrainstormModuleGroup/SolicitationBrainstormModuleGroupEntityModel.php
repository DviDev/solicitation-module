<?php

namespace Modules\Solicitation\Entities\SolicitationBrainstormModuleGroup;

use Modules\Base\Entities\BaseEntityModel;
use Modules\Solicitation\Repositories\SolicitationBrainstormModuleGroupRepository;
use Modules\Solicitation\Models\SolicitationBrainstormModuleGroupModel;

/**
 * @author Davi Menezes (davimenezes.dev@gmail.com)
 * @link https://github.com/DaviMenezes
 * @property-read SolicitationBrainstormModuleGroupModel $model
 * @method self save()
 * @method static self new()
 * @method static self props($alias = null, $force = null)
 * @method SolicitationBrainstormModuleGroupRepository repository()
 */
class SolicitationBrainstormModuleGroupEntityModel extends BaseEntityModel
{
    use SolicitationBrainstormModuleGroupProps;

    protected function repositoryClass(): string
    {
        return SolicitationBrainstormModuleGroupRepository::class;
    }
}
