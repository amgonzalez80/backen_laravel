<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFabricantes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fabricantes', function (Blueprint $table) {
            $table->bigIncrements('fabricantes_id')->comment('pk de la tabla fabricante');
            $table->string('nombre')->unique()->comment('nombre del fabricante');
            $table->string('identificacion')->unique()->comment('identificacion del fabricante');
            $table->string('direccion')->nullable()->comment('direccion del fabricante');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fabricantes');
    }
}
