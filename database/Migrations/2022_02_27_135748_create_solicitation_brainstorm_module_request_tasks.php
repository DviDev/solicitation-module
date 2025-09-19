<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Modules\Solicitation\Entities\SolicitationBrainstormModuleRequestTask\SolicitationBrainstormModuleRequestTaskEntityModel;

return new class extends Migration
{
    public function up()
    {
        Schema::create('solicitation_module_request_tasks', function (Blueprint $table): void {
            $table->id();

            $prop = SolicitationBrainstormModuleRequestTaskEntityModel::props(null, true);
            $table->unsignedBigInteger($prop->solicitation_id);
            $table->foreign($prop->solicitation_id, 'solicit_brains_mod_requests')
                ->references('id')->on('solicitation_module_requests')
                ->cascadeOnUpdate()->restrictOnDelete();
            $table->foreignId($prop->task_id)->unsigned()
                ->nullable()
                ->references('id')->on('tasks')
                ->cascadeOnUpdate()->nullOnDelete();
        });
    }

    public function down()
    {
        Schema::dropIfExists('solicitation_module_request_tasks');
    }
};
