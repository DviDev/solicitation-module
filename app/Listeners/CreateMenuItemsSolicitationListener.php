<?php

namespace Modules\Solicitation\Listeners;

use Modules\Project\Contracts\CreateMenuItemsListenerContract;

class CreateMenuItemsSolicitationListener extends CreateMenuItemsListenerContract
{
    protected function moduleName(): string
    {
        return config('solicitation.name');
    }
}
