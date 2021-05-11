<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParticipantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('participantes', function (Blueprint $table) {
           $table->id('Cod_Participante');
            $table->unsignedBigInteger('Cod_Iglesia');
            $table->string('Nombre_Participante',60);
            $table->string('Cedula',25)->nullable();
            $table->string('Telefono',10)->nullable();
            $table->string('Correo',100)->nullable();
            $table->string('Cargo',60)->nullable();
            $table->timestamps();

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
        Schema::dropIfExists('participantes');
    }
}
