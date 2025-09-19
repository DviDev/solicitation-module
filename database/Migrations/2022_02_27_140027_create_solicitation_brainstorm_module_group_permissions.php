<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Modules\Solicitation\Entities\SolicitationBrainstormModuleGroupPermission\SolicitationBrainstormModuleGroupPermissionEntityModel;

return new class extends Migration
{
    public function up()
    {
        Schema::create('solicitation_module_group_permissions', function (Blueprint $table): void {
            $table->id();

            $prop = SolicitationBrainstormModuleGroupPermissionEntityModel::props(null, true);
            $table->unsignedBigInteger($prop->group_id);
            $table->foreign($prop->group_id, 'solicitation_bra_mod_group_id')
                ->references('id')->on('solicitation_module_groups')
                ->cascadeOnUpdate()->restrictOnDelete();
            $table->char($prop->permission); // SolicitationGroupPermissionEnum::toArray()
        });
    }

    public function down()
    {
        Schema::dropIfExists('solicitation_group_permissions');
    }
};
