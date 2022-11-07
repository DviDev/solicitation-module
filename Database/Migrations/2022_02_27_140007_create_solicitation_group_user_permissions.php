<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Modules\Solicitation\Entities\SolicitationGroupUserPermission\SolicitationGroupUserPermissionEntityModel;
use Modules\Solicitation\Entities\SolicitationGroupUserPermission\SolicitationGroupUserPermissionEnum;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solicitation_group_user_permissions', function (Blueprint $table) {
            $table->id();

            $prop = SolicitationGroupUserPermissionEntityModel::props(null, true);
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
        Schema::dropIfExists('solicitation_group_user_permissions');
    }
};
