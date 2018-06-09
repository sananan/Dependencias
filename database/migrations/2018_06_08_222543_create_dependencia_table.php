<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


class CreateDependenciaTable extends Migration
{

    public function up()
    {
        Schema::create('dependencia', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('tipoTramite');
            $table->string('Nombre');
            $table->string('Descripcion');    
            
        });
    }

    public function down()
    {
        Schema::dropIfExists('dependencia');
    }
}
