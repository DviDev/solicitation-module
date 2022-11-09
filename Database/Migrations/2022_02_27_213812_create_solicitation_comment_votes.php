<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Modules\Solicitation\Entities\SolicitationCommentVote\SolicitationCommentVoteEntityModel;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solicitation_comment_votes', function (Blueprint $table) {
            $table->id();

            $prop = SolicitationCommentVoteEntityModel::props(null, true);
            $table->bigInteger($prop->comment_id)->unsigned();
            $table->bigInteger($prop->user_id)->unsigned();
            $table->boolean($prop->up_vote)->unsigned()->nullable();
            $table->boolean($prop->down_vote)->unsigned()->nullable();
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
        Schema::dropIfExists('solicitation_comment_votes');
    }
};
