<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dependencia extends Model
{
    protected $fillable = ['tipoTramite', 'Nombre', 'Descripcion'];
}
