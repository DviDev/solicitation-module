<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Modules\Solicitation\Entities\SolicitationCommentDownVotesEntityModel;

class CreateSolicitationCommentDownVotes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solicitation_comment_down_votes', function (Blueprint $table) {
            $table->id();

            $prop = SolicitationCommentDownVotesEntityModel::props(null, true);
            $table->bigInteger($prop->comment_id)->unsigned();
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
        Schema::dropIfExists('solicitation_comment_down_votes');
    }
}
