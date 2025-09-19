<?php

declare(strict_types=1);

namespace Modules\Solicitation\Entities\SolicitationBrainstormModuleGroup;

use Modules\Base\Entities\BaseEntityModel;
use Modules\Solicitation\Models\SolicitationBrainstormModuleGroupModel;

/**
 * @author Davi Menezes (davimenezes.dev@gmail.com)
 *
 * @link https://github.com/DaviMenezes
 *
 * @property-read SolicitationBrainstormModuleGroupModel $model
 *
 * @method self save()
 * @method static self new()
 * @method static self props($alias = null, $force = null)
 */
final class SolicitationBrainstormModuleGroupEntityModel extends BaseEntityModel
{
    use SolicitationBrainstormModuleGroupProps;
}
