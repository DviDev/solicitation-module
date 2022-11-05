<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Modules\Solicitation\Entities\SolicitationBrainstormEntityModel;

class CreateSolicitationBrainstorms extends Migration
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
            $table->text($prop->content);
            $table->bigInteger($prop->customer_id)->unsigned()->nullable();
            $table->bigInteger($prop->user_id)->unsigned();
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
}
