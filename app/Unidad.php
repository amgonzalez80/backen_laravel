<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unidad extends Model
{
    //
//    protected $unidadId;
//    protected $nombre = "";
//    protected $abreviatuta = "";
    
    /**
     * Atributos aignables
     *
     * @var array
     */
    protected $fillable = [
        'unidad_id', 'nombre', 'abreviatura',
    ];

   
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
//    protected $casts = [
//        'email_verified_at' => 'datetime',
//    ];
    
    
}
