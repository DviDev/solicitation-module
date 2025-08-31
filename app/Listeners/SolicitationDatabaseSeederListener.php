<?php

namespace Modules\Solicitation\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Artisan;
use Modules\Base\Events\DatabaseSeederEvent;
use Modules\Solicitation\Database\Seeders\SolicitationDatabaseSeeder;

class SolicitationDatabaseSeederListener implements ShouldQueue
{
    public function handle(DatabaseSeederEvent $event): void
    {
        Artisan::call('db:seed', ['--class' => SolicitationDatabaseSeeder::class]);
    }
}
