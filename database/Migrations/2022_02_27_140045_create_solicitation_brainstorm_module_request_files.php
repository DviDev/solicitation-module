<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Modules\Solicitation\Entities\SolicitationBrainstormModuleRequestFile\SolicitationBrainstormModuleRequestFileEntityModel;

return new class extends Migration
{

    public function up()
    {
        Schema::create('solicitation_module_request_files', function (Blueprint $table) {
            $table->id();

            $prop = SolicitationBrainstormModuleRequestFileEntityModel::props(null, true);
            $table->unsignedBigInteger($prop->solicitation_id);
            $table->foreign($prop->solicitation_id, 'solic_bra_mod_req_files_solicitation_id')
                ->references('id')->on('solicitation_module_requests');
            $table->string($prop->file_path, 150);
            $table->timestamp($prop->created_at);
        });
    }


    public function down()
    {
        Schema::dropIfExists('solicitation_module_request_files');
    }
};
