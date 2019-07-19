<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProducto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->bigIncrements('productos_id')->comment('pk del producto');
            $table->string('nombre_productos')->commnet('nombre del producto');
            
            $table->string('descripcion')->nullable()->comment('descripcion del producto');
            
            $table->bigInteger('unidades_id')->comment('fk a la tabla unidad de medida');
            $table->foreign('unidades_id')->references('unidades_id')->on('unidades');
            
            $table->bigInteger('fabricantes_id')->comment('fk a la tabla fabricante del producto');
            $table->foreign('fabricantes_id')->references('fabricantes_id')->on('fabricantes');
       
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos');
    }
}
