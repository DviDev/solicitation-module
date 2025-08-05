<?php

namespace Modules\Solicitation\Listeners;

use Illuminate\Support\Facades\Artisan;
use Modules\Base\Events\DatabaseSeederEvent;

class SolicitationDatabaseSeederListener
{
    public function handle(DatabaseSeederEvent $event): void
    {
        Artisan::call('db:seed', ['--class' => SolicitationDatabaseSeederListener::class]);
    }
}
