<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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

            $table->string('name', 50);
            $table->string('description')->nullable();
            $table->bigInteger('parent_id')->unsigned()->nullable();
            $table->bigInteger('brainstorm_id')->unsigned();
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
