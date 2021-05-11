<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EvaluacionXEvento extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evaluacion_X_evento', function (Blueprint $table) {
            $table->primary(['Cod_Evaluacion','Cod_Modulo']);

            $table->unsignedBigInteger('Cod_Evaluacion');
            $table->unsignedBigInteger('Cod_Modulo');
            $table->text('Respuestas');
            
            $table->foreign('Cod_Evaluacion')->references('Cod_Evaluacion')->on('evaluaciones');
            $table->foreign('Cod_Modulo')->references('Cod_Modulo')->on('modulos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('evaluacion_X_evento');
    }
}
