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
            $table->unsignedBigInteger($prop->comment_id);
            $table->foreign($prop->comment_id, 'sol_bra_mod_req_com_reactions_' .$prop->comment_id)
                ->references('id')->on('solicitation_brainstorm_module_request_comments')
                ->cascadeOnUpdate()->restrictOnDelete();

            $table->unsignedBigInteger($prop->user_id);
            $table->foreign($prop->user_id, 'sol_bra_mod_req_com_reactions_'.$prop->user_id)
                ->references('id')->on('users')
                ->cascadeOnUpdate()->restrictOnDelete();

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
