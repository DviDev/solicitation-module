<?php

namespace Modules\Solicitation\Tests\Tables;

use Modules\Base\Contracts\BaseModel;
use Modules\Base\Services\Tests\BaseTest;
use Modules\Solicitation\Models\SolicitationBrainstormModuleGroupPermissionModel;

class SolicitationBrainstormModuleGroupPermissionTableTest extends BaseTest
{
    public function getModelClass(): string|BaseModel
    {
        return SolicitationBrainstormModuleGroupPermissionModel::class;
    }
}
