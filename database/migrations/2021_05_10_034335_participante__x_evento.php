<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ParticipanteXEvento extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('participante_X_evento', function (Blueprint $table) {
            $table->unsignedInteger('Cod_Modulo');
            $table->unsignedInteger('Cod_Participante');

            $table->foreign('Cod_Modulo')->references('Cod_Modulo')->on('modulos');
            $table->foreign('Cod_Participante')->references('Cod_Participante')->on('participantes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('participante_X_evento');
    }
}
