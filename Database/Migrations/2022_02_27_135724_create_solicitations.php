<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Modules\Solicitation\Entities\Solicitation\SolicitationEntityModel;
use Modules\Solicitation\Entities\Solicitation\SolicitationPriorityEnum;
use Modules\Solicitation\Entities\Solicitation\SolicitationStatusEnum;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solicitations', function (Blueprint $table) {
            $table->id();

            $prop = SolicitationEntityModel::props(null, true);
            $table->bigInteger($prop->solicitant_id)->unsigned()->nullable();
            $table->string($prop->name, 150);
            $table->text($prop->description);
            $table->enum($prop->solicitant_priority, SolicitationPriorityEnum::toArray())->default('normal');
            $table->enum($prop->status, SolicitationStatusEnum::toArray())->default('open')->comment('If completed, it is complete and you should no longer edit');
            $table->tinyInteger($prop->num_order)->unsigned()->nullable();
            $table->dateTime($prop->deadline)->nullable();
            $table->dateTime($prop->solicitant_approval_at)->nullable();
            $table->bigInteger($prop->module_id)->unsigned();
            $table->timestamp($prop->created_at);
            $table->timestamp($prop->updated_at)->nullable();
            $table->timestamp($prop->deleted_at)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('solicitations');
    }
};
