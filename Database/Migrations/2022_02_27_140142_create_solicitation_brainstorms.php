<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Modules\Solicitation\Entities\SolicitationBrainstorm\SolicitationBrainstormEntityModel;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solicitation_brainstorms', function (Blueprint $table) {
            $table->id();

            $prop = SolicitationBrainstormEntityModel::props(null, true);
            $table->bigInteger($prop->customer_id)->unsigned()->nullable();
            $table->bigInteger($prop->user_id)->unsigned();
            $table->text($prop->content);
            $table->timestamp($prop->created_at);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('solicitation_brainstorms');
    }
};
