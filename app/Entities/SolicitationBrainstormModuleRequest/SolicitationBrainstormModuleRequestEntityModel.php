<?php

namespace Modules\Solicitation\Entities\SolicitationBrainstormModuleRequest;

use Modules\Base\Entities\BaseEntityModel;
use Modules\Solicitation\Models\SolicitationBrainstormModuleRequestModel;

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
 */
class SolicitationBrainstormModuleRequestEntityModel extends BaseEntityModel
{
    use SolicitationBrainstormModuleRequestProps;
}
