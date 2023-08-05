<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Modules\Solicitation\Entities\SolicitationBrainstormModuleRequest\SolicitationBrainstormModuleRequestEntityModel;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solicitation_brainstorm_module_requests', function (Blueprint $table) {
            $table->id();

            $prop = SolicitationBrainstormModuleRequestEntityModel::props(null, true);
            $table->foreignId($prop->module_id)
                ->references('id')->on('solicitation_brainstorm_modules')
                ->cascadeOnUpdate()->restrictOnDelete();
            $table->foreignId($prop->requester_id)
                ->nullable()
                ->references('id')->on('users')
                ->cascadeOnUpdate()->nullOnDelete();
            $table->string($prop->name, 150);
            $table->text($prop->description);
            $table->char($prop->solicitant_priority)->default('normal');//SolicitationPriorityEnum::toArray()
            $table->char($prop->status)->default('open')
                ->comment('If completed, it is complete and you should no longer edit');//SolicitationStatusEnum::toArray()
            $table->tinyInteger($prop->num_order)->unsigned()->nullable();
            $table->dateTime($prop->deadline)->nullable();
            $table->dateTime($prop->solicitant_approval_at)->nullable();
            $table->timestamp($prop->created_at);
            $table->timestamp($prop->updated_at)->nullable();
            $table->timestamp($prop->deleted_at)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('solicitation_brainstorm_module_requests');
    }
};
