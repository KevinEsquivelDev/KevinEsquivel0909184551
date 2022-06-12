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
        Schema::create('empleados', function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->bigIncrements("id");

            $table->bigInteger('id_usuario')->unsigned();

            $table->string('nombre_empleado',45);
            $table->string('numero_telefono',8);
            $table->string('correo',45);
            $table->string('direccion', 100);
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
        chema::dropIfExists('empleados');
    }
}
