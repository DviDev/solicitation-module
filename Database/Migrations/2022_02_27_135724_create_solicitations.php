<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSolicitations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solicitations', function (Blueprint $table) {
            $table->id();

            $table->bigInteger('solicitant_id')->nullable();
            $table->string('name', 150);
            $table->text('description');
            $table->enum('solicitant_priority', ['urgent','high','normal','low'])->default('normal');
            $table->enum('status', ['closed','open','finalized','abandonned'])->default('open')->comment('If completed, it is complete and you should no longer edit');
            $table->tinyInteger('num_order')->nullable();
            $table->dateTime('deadline')->nullable();
            $table->dateTime('solicitant_approval_at')->nullable();
            $table->bigInteger('module_id');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
            $table->timestamp('deleted_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('solicitations');
    }
}
