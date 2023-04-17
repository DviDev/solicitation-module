<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Modules\Solicitation\Entities\SolicitationBrainstormModule\SolicitationBrainstormModuleEntityModel;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solicitation_brainstorm_modules', function (Blueprint $table) {
            $table->id();

            $prop = SolicitationBrainstormModuleEntityModel::props(null, true);
            $table->bigInteger($prop->brainstorm_id)->unsigned();
            $table->bigInteger($prop->parent_id)->unsigned()->nullable();
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
        Schema::dropIfExists('solicitation_modules');
    }
};
