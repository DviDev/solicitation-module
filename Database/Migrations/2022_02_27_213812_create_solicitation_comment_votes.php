<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Modules\Solicitation\Entities\SolicitationBrainstormModuleRequestCommentReaction\SolicitationBrainstormModuleRequestCommentReactionEntityModel;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solicitation_brainstorm_module_request_comment_reactions', function (Blueprint $table) {
            $table->id();

            $prop = SolicitationBrainstormModuleRequestCommentReactionEntityModel::props(null, true);
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
        Schema::dropIfExists('solicitation_brainstorm_module_request_comment_reactions');
    }
};
