<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;
use app\Http\Requests\ProductosStoreRequest;

class ProductoController extends Controller
{
  //funcion de consulta todos los productos
    public function index() {
        $producto = Producto::select('unidades.unidades_id','productos.nombre_producto','productos.productos_id',
        'productos.descripcion','productos.fabricantes_id','fabricantes.nombre','fabricantes.identificacion',
        'fabricantes.direccion','unidades.nombre as nombre_unidad','unidades.abreviatura')
                    ->join('unidades', 'unidades.unidades_id', '=', 'productos.unidades_id')
                    ->join('fabricantes', 'fabricantes.fabricantes_id', '=', 'productos.fabricantes_id')
                    ->get();
        return response()->json($producto, 200);
    }

    //funcion de consulta por producto
    public function show(Request $request) {
        $producto = Producto::find($request->input('productos_id'));
        return  $producto;
    }
 //funcion para crear producto
    public function store(Request $request) {
        $producto = Producto::create($request->all());
        return response()->json($producto, 201);
    }
//funcion para modificar producto
    public function update(Request $request,$id)
    { 
        $producto = Producto::find($id);
        $producto->nombre_producto =  $request->get('nombre_producto');
        $producto->descripcion = $request->get('descripcion');
        $producto->fabricantes_id = $request->get('fabricantes_id');
        $producto->unidades_id = $request->get('unidades_id');
        $producto->save();

        return response()->json($producto, 200);
    }
//funcion para eliminar producto
    public function delete(Producto $producto) {
        $producto->delete();
        return response()->json(null, 204);
    }
    
}
