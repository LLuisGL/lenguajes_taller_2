<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSolicitudsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solicituds', function (Blueprint $table) {
            $table->id();
            $table->string('tema');
            $table->string('descripcion');
            $table->enum('area',['TI','Contabilidad','Gerente','Operativo']);
            $table->enum('estado',['Solicitado','Aprobado','Rechazado']);
            $table->string('observacion');
            $table->boolean('usuario_externo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('solicituds');
    }
}
