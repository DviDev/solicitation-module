<?php

namespace Modules\Solicitation\Tests\Tables;

use Modules\Base\Contracts\BaseModel;
use Modules\Base\Services\Tests\BaseTest;
use Modules\Solicitation\Models\SolicitationBrainstormModuleRequestFileModel;

class SolicitationBrainstormModuleRequestFileTableTest extends BaseTest
{
    public function getModelClass(): string|BaseModel
    {
        return SolicitationBrainstormModuleRequestFileModel::class;
    }
}
