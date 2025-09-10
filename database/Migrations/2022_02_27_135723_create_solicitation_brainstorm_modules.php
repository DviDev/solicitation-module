<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Modules\Solicitation\Entities\SolicitationBrainstormModule\SolicitationBrainstormModuleEntityModel;

return new class extends Migration
{

    public function up()
    {
        Schema::create('solicitation_modules', function (Blueprint $table) {
            $table->id();

            $prop = SolicitationBrainstormModuleEntityModel::props(null, true);
            $table->foreignId($prop->brainstorm_id)
                ->references('id')->on('solicitations')
                ->cascadeOnUpdate()->restrictOnDelete();
            $table->foreignId($prop->parent_id)
                ->nullable()
                ->references('id')->on('solicitation_modules')
                ->cascadeOnUpdate()->nullOnDelete();
            $table->string($prop->name, 50);
            $table->string($prop->description)->nullable();
        });
    }


    public function down()
    {
        Schema::dropIfExists('solicitation_modules');
    }
};
