<?php

declare(strict_types=1);

namespace Modules\Solicitation\Entities\SolicitationBrainstormModuleRequestFile;

use Modules\Base\Entities\BaseEntityModel;
use Modules\Solicitation\Models\SolicitationBrainstormModuleRequestFileModel;

/**
 * @author Davi Menezes (davimenezes.dev@gmail.com)
 *
 * @link https://github.com/DaviMenezes
 *
 * @property-read SolicitationBrainstormModuleRequestFileModel $model
 *
 * @method self save()
 * @method static self new()
 * @method static self props($alias = null, $force = null)
 */
final class SolicitationBrainstormModuleRequestFileEntityModel extends BaseEntityModel
{
    use SolicitationBrainstormModuleRequestFileProps;
}
