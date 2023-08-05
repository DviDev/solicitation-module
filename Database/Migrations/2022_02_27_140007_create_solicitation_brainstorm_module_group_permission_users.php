<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Modules\Solicitation\Entities\SolicitationBrainstormModuleGroupPermissionUser\SolicitationBrainstormModuleGroupPermissionUserEntityModel;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solicitation_brainstorm_module_group_permission_users', function (Blueprint $table) {
            $table->id();

            $prop = SolicitationBrainstormModuleGroupPermissionUserEntityModel::props(null, true);
            $table->unsignedBigInteger($prop->group_id)->nullable();
            $table->foreign($prop->group_id, 'solicit_brain_mod_gro_group_id')
                ->references('id')->on('solicitation_brainstorm_module_groups')
                ->cascadeOnUpdate()->restrictOnDelete();
            $table->unsignedBigInteger($prop->user_id);
            $table->foreign($prop->user_id, 'solicitation_gro_per_user_id')
                ->references('id')->on('users')
                ->cascadeOnUpdate()->restrictOnDelete();
            $table->char($prop->type)->nullable();//SolicitationGroupUserPermissionEnum::toArray()
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('solicitation_brainstorm_module_group_permission_users');
    }
};
