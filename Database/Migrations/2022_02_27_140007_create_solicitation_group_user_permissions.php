<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Modules\Solicitation\Entities\SolicitationBrainstormModuleGroupPermissionUser\SolicitationBrainstormModuleGroupPermissionUserEntityModel;
use Modules\Solicitation\Entities\SolicitationBrainstormModuleGroupPermissionUser\SolicitationGroupUserPermissionEnum;

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
            $table->bigInteger($prop->group_id)->unsigned()->nullable();
            $table->bigInteger($prop->user_id)->unsigned();
            $table->enum($prop->type, SolicitationGroupUserPermissionEnum::toArray())->nullable();
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
