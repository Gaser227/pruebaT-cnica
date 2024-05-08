<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    //Codigo para evitar enviar el token
    protected $fillable = ['nombreProducto', 'precio', 'stock', 'categoria_id', '_token'];

    //Funcion para agregar la id de la categoria
    public function categoria()
    {
        return $this->belongsTo(Categoria::class, 'categoria_id');
    }
}
