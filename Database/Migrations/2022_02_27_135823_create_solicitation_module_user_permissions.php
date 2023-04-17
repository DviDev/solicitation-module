<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Modules\Solicitation\Entities\SolicitationBrainstormModuleGroupPermission\SolicitationModuleUserPermissionEnum;
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
            $table->bigInteger($prop->module_id)->unsigned()->nullable();
            $table->bigInteger($prop->user_id)->unsigned();
            $table->enum($prop->type, SolicitationModuleUserPermissionEnum::toArray())->nullable();
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
