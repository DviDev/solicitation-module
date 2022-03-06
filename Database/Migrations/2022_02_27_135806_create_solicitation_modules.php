<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Modules\Solicitation\Entities\SolicitationModuleEntityModel;

class CreateSolicitationModules extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solicitation_modules', function (Blueprint $table) {
            $table->id();

            $prop = SolicitationModuleEntityModel::props(null, true);
            $table->string($prop->name, 50);
            $table->string($prop->description)->nullable();
            $table->bigInteger($prop->parent_id)->unsigned()->nullable();
            $table->bigInteger($prop->brainstorm_id)->unsigned();
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
}
