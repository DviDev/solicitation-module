<?php

declare(strict_types=1);

namespace Modules\Solicitation\Providers;

use Illuminate\Support\Facades\Event;
use Modules\Base\Contracts\BaseServiceProviderContract;
use Modules\Base\Events\DatabaseSeederEvent;
use Modules\Project\Events\CreateMenuItemsEvent;
use Modules\Solicitation\Listeners\CreateMenuItemsSolicitationListener;
use Modules\Solicitation\Listeners\SolicitationDatabaseSeederListener;

final class SolicitationServiceProvider extends BaseServiceProviderContract
{
    public function registerEvents(): void
    {
        Event::listen(DatabaseSeederEvent::class, SolicitationDatabaseSeederListener::class);
        Event::listen(CreateMenuItemsEvent::class, CreateMenuItemsSolicitationListener::class);
    }

    public function provides(): array
    {
        return [
            RouteServiceProvider::class,
        ];
    }

    public function getModuleName(): string
    {
        return 'Solicitation';
    }

    public function getModuleNameLower(): string
    {
        return 'solicitation';
    }

    protected function langPath(): string
    {
        return module_path($this->getModuleName(), 'resources/lang');
    }
}
