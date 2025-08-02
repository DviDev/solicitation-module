<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Modules\Solicitation\Entities\SolicitationBrainstormModuleUserPermission\SolicitationBrainstormModuleUserPermissionEntityModel;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solicitation_brainstorm_module_user_permissions', function (Blueprint $table) {
            $table->id();

            $prop = SolicitationBrainstormModuleUserPermissionEntityModel::props(null, true);
            $table->unsignedBigInteger($prop->module_id)->nullable();
            $table->foreign($prop->module_id, 'solicitation_brainstorm_mod_module_id')
                ->references('id')->on('solicitation_brainstorm_modules')
                ->cascadeOnUpdate()->restrictOnDelete();
            $table->foreignId($prop->user_id)
                ->references('id')->on('users')
                ->cascadeOnUpdate()->restrictOnDelete();
            $table->char($prop->type)->nullable(); // SolicitationModuleUserPermissionEnum::toArray()
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('solicitation_brainstorm_module_user_permissions');
    }
};
