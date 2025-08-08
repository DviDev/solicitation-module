<?php

namespace Modules\Solicitation\Listeners;

use Modules\Project\Listeners\CreateMenuItemsListenerContract;

class CreateMenuItemsSolicitationListener extends CreateMenuItemsListenerContract
{
    public function moduleName(): string
    {
        return config('solicitation.name');
    }
}
