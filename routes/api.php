<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
//Agregamos a las rutas
//Route::group(['middleware' => 'cors'], function(){
    //aqui van todas las rutas que necesitan CORS

Route::get('unidades', 'UnidadController@index');
 
Route::get('unidades/{id}', 'UnidadController@show');
 
Route::post('unidades','UnidadController@store');
 
Route::put('unidades/{unidad}','UnidadController@update');
 
Route::delete('unidades/{unidad}', 'UnidadController@delete');


Route::get('fabricantes', 'FabricanteController@index');
 
Route::get('fabricantes/{id}', 'FabricanteController@show');
 
Route::post('fabricantes','FabricanteController@store');
 
Route::put('fabricantes/{fabricante}','FabricanteController@update');
 
Route::delete('fabricantes/{fabricante}', 'FabricanteController@delete');


Route::get('productos', 'ProductoController@index');
 
Route::get('productos/{id}', 'ProductoController@show');
 
Route::post('productos','ProductoController@store');

Route::put('productos/{id}','ProductoController@update');
 
Route::delete('productos/{producto}', 'ProductoController@delete');

//}); 