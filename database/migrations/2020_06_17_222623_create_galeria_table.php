<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGaleriaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('galeria', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre',255);
            $table->mediumText('cuerpo');
            $table->mediumText('busqueda');
            $table->string('url_imagen',100);
            $table->date('fecha_publicacion');
            $table->boolean('publicado');
            $table->integer('creado_por');
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
        Schema::dropIfExists('galeria');
    }
}
