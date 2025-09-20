<?php

declare(strict_types=1);

namespace Modules\Solicitation\Entities\SolicitationBrainstormModule;

use Modules\Base\Entities\BaseEntityModel;
use Modules\Solicitation\Models\SolicitationBrainstormModuleModel;

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
 */
final class SolicitationBrainstormModuleEntityModel extends BaseEntityModel
{
    use SolicitationBrainstormModuleProps;
}
