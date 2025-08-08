<?php

namespace Modules\Solicitation\Listeners;

use Illuminate\Support\Facades\Artisan;
use Modules\Base\Events\DatabaseSeederEvent;
use Modules\Solicitation\Database\Seeders\SolicitationDatabaseSeeder;

class SolicitationDatabaseSeederListener
{
    public function handle(DatabaseSeederEvent $event): void
    {
        Artisan::call('db:seed', ['--class' => SolicitationDatabaseSeeder::class]);
    }
}
