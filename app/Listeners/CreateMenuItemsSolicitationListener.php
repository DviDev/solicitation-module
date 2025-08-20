<?php

namespace Modules\Solicitation\Listeners;

use Modules\Project\Contracts\CreateMenuItemsListenerContract;

class CreateMenuItemsSolicitationListener extends CreateMenuItemsListenerContract
{
    public function moduleName(): string
    {
        return config('solicitation.name');
    }
}
