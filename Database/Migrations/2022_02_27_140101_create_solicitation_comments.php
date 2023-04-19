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
            $table->bigInteger($prop->solicitation_id)->unsigned();
            $table->bigInteger($prop->user_id)->unsigned();
            $table->bigInteger($prop->parent_id)->unsigned()->nullable();
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
