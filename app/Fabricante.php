<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fabricante extends Model
{
    
    /**
     * Atributos asignables
     *
     * @var array
     */
    protected $table = 'fabricantes';
    protected $primaryKey = 'fabricantes_id';
    public $timestamps = false;
    
    protected $fillable = [
       'fabricantes_id', 'nombre', 'identificacion', 'direccion'
    ];
   
}
