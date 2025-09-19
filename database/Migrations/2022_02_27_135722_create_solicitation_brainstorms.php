<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Modules\Solicitation\Entities\SolicitationBrainstorm\SolicitationBrainstormEntityModel;

return new class extends Migration
{
    public function up()
    {
        Schema::create('solicitations', function (Blueprint $table) {
            $table->id();

            $prop = SolicitationBrainstormEntityModel::props(null, true);
            $table->foreignId($prop->project_id)
                ->references('id')->on('projects')
                ->cascadeOnUpdate()->restrictOnDelete();
            $table->foreignId($prop->user_id)
                ->references('id')->on('users')
                ->cascadeOnUpdate()->restrictOnDelete();
            $table->text($prop->content);
            $table->timestamp($prop->created_at);
        });
    }

    public function down()
    {
        Schema::dropIfExists('solicitations');
    }
};
