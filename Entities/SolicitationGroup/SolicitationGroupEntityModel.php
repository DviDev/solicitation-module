<?php

namespace Modules\Solicitation\Entities\SolicitationGroup;

use Modules\Base\Entities\BaseEntityModel;
use Modules\Solicitation\Repositories\SolicitationGroupRepository;
use Modules\Solicitation\Models\SolicitationGroupModel;

/**
 * @author Davi Menezes (davimenezes.dev@gmail.com)
 * @link https://github.com/DaviMenezes
 * @property-read SolicitationGroupModel $model
 * @method self save()
 * @method static self new()
 * @method static self props($alias = null, $force = null)
 * @method SolicitationGroupRepository repository()
 */
class SolicitationGroupEntityModel extends BaseEntityModel
{
    use SolicitationGroupProps;

    protected function repositoryClass(): string
    {
        return SolicitationGroupRepository::class;
    }
}
