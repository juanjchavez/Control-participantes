<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eventos', function (Blueprint $table) {
            $table->integer('Cod_Evento')->autoIncrement();
            $table->unsignedInteger('Cod_Modulo');
            $table->unsignedInteger('Cod_Iglesia');
            $table->date('fecha_evento');
            $table->tinyText('Descripcion');
            $table->timestamps();

            $table->foreign('Cod_Modulo')->references('Cod_Modulo')->on('modulos');
            $table->foreign('Cod_Iglesia')->references('Cod_Iglesia')->on('iglesias');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('eventos');
    }
}
