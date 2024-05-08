<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    //Codigo para evitar enviar el token
    protected $fillable = ['nombreCategoria', 'descripcion', '_token'];
}
