<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    //
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'productos_id', 'nombre_productos', 'descripcion', 'unidades_id', 'fabricantes_id'
    ];
}
