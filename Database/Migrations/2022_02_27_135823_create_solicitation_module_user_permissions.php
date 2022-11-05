<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Modules\Solicitation\Entities\SolicitationModuleUserPermissionEntityModel;

class CreateSolicitationModuleUserPermissions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solicitation_module_user_permissions', function (Blueprint $table) {
            $table->id();

            $prop = SolicitationModuleUserPermissionEntityModel::props(null, true);
            $table->bigInteger($prop->user_id)->unsigned();
            $table->bigInteger($prop->module_id)->unsigned()->nullable();
            $table->enum($prop->type, ['all','view','insert','update','delete','comment','update_status'])->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('solicitation_module_user_permissions');
    }
}
