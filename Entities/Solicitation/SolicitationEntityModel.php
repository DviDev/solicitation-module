<?php

namespace Modules\Solicitation\Entities\Solicitation;

use Modules\Base\Entities\BaseEntityModel;
use Modules\Solicitation\Repositories\SolicitationRepository;
use Modules\Solicitation\Models\SolicitationModel;

/**
 * @author Davi Menezes (davimenezes.dev@gmail.com)
 * @link https://github.com/DaviMenezes
 * @property-read SolicitationModel $model
 * @method self save()
 * @method static self new()
 * @method static self props($alias = null, $force = null)
 * @method SolicitationRepository repository()
 */
class SolicitationEntityModel extends BaseEntityModel
{
    use SolicitationProps;

    protected function repositoryClass(): string
    {
        return SolicitationRepository::class;
    }
}
