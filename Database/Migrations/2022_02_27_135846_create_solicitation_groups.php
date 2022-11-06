<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Modules\Solicitation\Entities\SolicitationGroup\SolicitationGroupEntityModel;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solicitation_groups', function (Blueprint $table) {
            $table->id();

            $prop = SolicitationGroupEntityModel::props(null, true);
            $table->bigInteger($prop->module_id)->unsigned()->nullable();
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
