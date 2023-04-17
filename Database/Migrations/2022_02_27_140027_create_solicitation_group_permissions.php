<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Modules\Solicitation\Entities\SolicitationBrainstormModuleGroupPermission\SolicitationBrainstormModuleGroupPermissionEntityModel;
use Modules\Solicitation\Entities\SolicitationBrainstormModuleGroupPermission\SolicitationGroupPermissionEnum;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solicitation_brainstorm_module_group_permissions', function (Blueprint $table) {
            $table->id();

            $prop = SolicitationBrainstormModuleGroupPermissionEntityModel::props(null, true);
            $table->bigInteger($prop->group_id)->unsigned();
            $table->enum($prop->permission, SolicitationGroupPermissionEnum::toArray());
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
};
