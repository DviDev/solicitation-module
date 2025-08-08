<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Modules\Solicitation\Entities\SolicitationBrainstormModuleGroup\SolicitationBrainstormModuleGroupEntityModel;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solicitation_module_groups', function (Blueprint $table) {
            $table->id();

            $prop = SolicitationBrainstormModuleGroupEntityModel::props(null, true);
            $table->unsignedBigInteger($prop->module_id)->nullable();
            $table->foreign($prop->module_id, 'solicit_brains_mod_group_mod_id')
                ->references('id')->on('solicitation_modules')
                ->cascadeOnUpdate()->restrictOnDelete();
            $table->string($prop->name, 50);
            $table->string($prop->description)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('solicitation_groups');
    }
};
