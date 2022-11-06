<?php

namespace Modules\Solicitation\Entities\SolicitationBrainstorm;

use Modules\Base\Entities\BaseEntityModel;
use Modules\Solicitation\Repositories\SolicitationBrainstormRepository;
use Modules\Solicitation\Models\SolicitationBrainstormModel;

/**
 * @author Davi Menezes (davimenezes.dev@gmail.com)
 * @link https://github.com/DaviMenezes
 * @property-read SolicitationBrainstormModel $model
 * @method self save()
 * @method static self new()
 * @method static self props($alias = null, $force = null)
 * @method SolicitationBrainstormRepository repository()
 */
class SolicitationBrainstormEntityModel extends BaseEntityModel
{
    use SolicitationBrainstormProps;

    protected function repositoryClass(): string
    {
        return SolicitationBrainstormRepository::class;
    }
}
