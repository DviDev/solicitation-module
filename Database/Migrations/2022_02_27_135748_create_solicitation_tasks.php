<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Modules\Solicitation\Entities\SolicitationTask\SolicitationTaskEntityModel;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solicitation_tasks', function (Blueprint $table) {
            $table->id();

            $prop = SolicitationTaskEntityModel::props(null, true);
            $table->bigInteger($prop->solicitation_id)->unsigned();
            $table->bigInteger($prop->task_id)->unsigned()->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('solicitation_tasks');
    }
};
