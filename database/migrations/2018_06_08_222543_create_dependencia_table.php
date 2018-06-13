<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


class CreateDependenciaTable extends Migration
{

    public function up()
    {
        Schema::create('dependencias', function (Blueprint $table) {
            $table->increments('id');        
            $table->string('tipoTramite');
            $table->string('Nombre');
            $table->string('Descripcion');    
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('dependencias');
    }
}
