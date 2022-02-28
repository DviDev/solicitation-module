<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Modules\Solicitation\Entities\SolicitationGroupPermissionEntityModel;
use Modules\Solicitation\Entities\SolicitationGroupUserPermissionEntityModel;

class CreateSolicitationGroupPermissions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solicitation_group_permissions', function (Blueprint $table) {
            $table->id();

            $prop = SolicitationGroupPermissionEntityModel::props(null, true);
            $table->bigInteger($prop->group_id)->unsigned();
            $table->enum($prop->permission, ['all','view','insert','update','delete','comment','update_status']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('solicitation_group_permissions');
    }
}
