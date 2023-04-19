<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Modules\Solicitation\Entities\SolicitationBrainstormModuleRequestComment\SolicitationBrainstormModuleRequestCommentEntityModel;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solicitation_brainstorm_module_request_comments', function (Blueprint $table) {
            $table->id();

            $prop = SolicitationBrainstormModuleRequestCommentEntityModel::props(null, true);
            $table->unsignedBigInteger($prop->solicitation_id);
            $table->foreign($prop->solicitation_id, 'solicitation_bra_mod_req_com_'.$prop->solicitation_id)
                ->references('id')->on('solicitation_brainstorm_module_requests')
                ->cascadeOnUpdate()->restrictOnDelete();

            $table->unsignedBigInteger($prop->user_id);
            $table->foreign($prop->user_id, 'solicitation_bra_mod_req_com_'.$prop->user_id)
                ->references('id')->on('users')
                ->cascadeOnUpdate()->restrictOnDelete();

            $table->unsignedBigInteger($prop->parent_id)->nullable();
            $table->foreign($prop->parent_id, 'solicitation_bra_mod_req_com_'.$prop->parent_id)
                ->references('id')->on('solicitation_brainstorm_module_request_comments')
                ->cascadeOnUpdate()->restrictOnDelete();

            $table->text($prop->message);
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
        Schema::dropIfExists('solicitation_brainstorm_module_request_comments');
    }
};
