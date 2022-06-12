<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RegistroDeEmpleados extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registro_de_empleados', function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->bigIncrements("codigo_empleado");

            $table->bigInteger('id_usuario')->unsigned();

            $table->string('nombre_empleado');
            $table->string('numero_telefono');
            $table->string('correo');
            $table->string('departamento', 100);

            $table->rememberToken();
            $table->timestamps();

            $table->foreign('id_usuario')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        chema::dropIfExists('registro_de_empleados');
    }
}
