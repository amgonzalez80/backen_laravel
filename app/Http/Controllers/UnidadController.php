<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Unidad;
//use App\Http\Requests\UnidadesStoreRequest;

class UnidadController extends Controller {

    public function index() {
        $unidad = Unidad::all();

        if (is_null($unidad)) {
            return response()->json("Registro no encontrado", 404);
        }

        return response()->json($unidad, 201);
    }

    public function show(Request $request) {
        $unidad = Unidad::find($request->input('unidades_id'));

        if (is_null($unidad)) {
            return response()->json("Registro no encontrado", 404);
        }

        return response()->json($unidad, 201);
    }

    public function store(Request $request) {
        $unidad = Unidad::create($request->all());
        return response()->json($unidad, 201);
    }

    public function update(Request $request, Unidad $unidad) {
        $unidad->update($request->all());
        return response()->json($unidad, 200);
    }

    public function delete(Unidad $unidad) {
        $unidad->delete();
        return response()->json(null, 204);
    }

}
