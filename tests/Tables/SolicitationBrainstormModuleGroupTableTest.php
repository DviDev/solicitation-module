<?php

declare(strict_types=1);

namespace Modules\Solicitation\Tests\Tables;

use Modules\Base\Contracts\BaseModel;
use Modules\Base\Services\Tests\BaseTest;
use Modules\Solicitation\Models\SolicitationBrainstormModuleGroupModel;

final class SolicitationBrainstormModuleGroupTableTest extends BaseTest
{
    public function getModelClass(): string|BaseModel
    {
        return SolicitationBrainstormModuleGroupModel::class;
    }
}
