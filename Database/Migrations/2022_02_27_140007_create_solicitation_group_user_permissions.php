<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSolicitationGroupUserPermissions extends Migration
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

            $table->bigInteger('group_id')->nullable();
            $table->bigInteger('user_id');
            $table->enum('type', ['all','view','insert','update','delete','comment','update_status'])->nullable();
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
}
