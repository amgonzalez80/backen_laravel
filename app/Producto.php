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
    protected $table = 'productos';
    public $timestamps = false;
    protected $primaryKey = 'productos_id';
    
    protected $fillable = [
        'productos_id', 'nombre_producto', 'descripcion', 'unidades_id', 'fabricantes_id'
    ];
}
