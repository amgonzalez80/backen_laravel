<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fabricante extends Model
{
    
    /**
     * Atributos aignables
     *
     * @var array
     */
    protected $fillable = [
        'fabricantes_id','nombre', 'identificacion', 'direccion',
    ];
    
//    protected $nombre = "";
//    protected $identificacion = "";
//    protected $direccion = "";
//    
//    function getNombre() {
//        return $this->nombre;
//    }
//
//    function getIdentificacion() {
//        return $this->identificacion;
//    }
//
//    function getDireccion() {
//        return $this->direccion;
//    }
//
//    function setNombre($nombre) {
//        $this->nombre = $nombre;
//    }
//
//    function setIdentificacion($identificacion) {
//        $this->identificacion = $identificacion;
//    }
//
//    function setDireccion($direccion) {
//        $this->direccion = $direccion;
//    }
    
}
