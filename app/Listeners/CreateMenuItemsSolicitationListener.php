<?php

declare(strict_types=1);

namespace Modules\Solicitation\Listeners;

use Modules\Project\Contracts\CreateMenuItemsListenerContract;

final class CreateMenuItemsSolicitationListener extends CreateMenuItemsListenerContract
{
    protected function moduleName(): string
    {
        return config('solicitation.name');
    }
}
