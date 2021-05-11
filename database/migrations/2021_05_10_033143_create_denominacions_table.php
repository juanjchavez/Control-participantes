<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDenominacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('denominaciones', function (Blueprint $table) {
            $table->integer('Cod_Denominacion');
            $table->string('N_Denominacion',200);
            $table->string('N_Contacto',60)->nullable();
            $table->string('Cargo_Contacto',60)->nullable();
            $table->string('Telefono',10)->nullable();
            $table->string('Direccion',300)->nullable();
            $table->tinyText('Comentario')->nullable();
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
        Schema::dropIfExists('denominaciones');
    }
}
