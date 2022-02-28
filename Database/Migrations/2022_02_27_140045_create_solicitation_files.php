<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Modules\Solicitation\Entities\SolicitationFilesEntityModel;

class CreateSolicitationFiles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solicitation_files', function (Blueprint $table) {
            $table->id();

            $prop = SolicitationFilesEntityModel::props(null, true);
            $table->bigInteger($prop->solicitation_id)->unsigned();
            $table->string($prop->file_path, 150);
            $table->timestamp($prop->created_at)->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('solicitation_files');
    }
}
