<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unidad extends Model
{
    /**
     * Atributos aignables
     *
     * @var array
     */
    protected $table = 'unidades';
    protected $primaryKey = 'unidades_id';
    public $timestamps = false;
        
    protected $fillable  = [
        'unidades_id','nombre', 'abreviatura'
    ];
    
}
