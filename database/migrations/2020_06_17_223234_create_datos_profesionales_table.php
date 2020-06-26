<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatosProfesionalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datos_profesionales', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('dni');
            $table->string('nombre',100);
            $table->string('apellido',100);
            $table->string('titulo',100);
            $table->string('nivel_posgrado',80);
            $table->string('especialidad',80);
            $table->string('email',80);
            $table->string('sintesis',4000);
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
        Schema::dropIfExists('datos_profesionales');
    }
}
