<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIglesiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('iglesias', function (Blueprint $table) {
            $table->integer('Cod_Iglesia')->autoIncrement();
            $table->unsignedInteger('Cod_Departamento');
            $table->unsignedInteger('Cod_Denominacion');
            $table->string('N_Iglesia',100);
            $table->string('N_Pastor',80)->nullable();
            $table->string('Telefono',10)->nullable();
            $table->string('Correo',100)->nullable();
            $table->string('Direccion',300)->nullable();
            $table->tinyText('Comentarios')->nullable();
            $table->timestamps();

            $table->foreign('Cod_Departamento')->references('Cod_Departamento')->on('departamentos');
            $table->foreign('Cod_Denominacion')->references('Cod_Denominacion')->on('denominaciones');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('iglesias');
    }
}
