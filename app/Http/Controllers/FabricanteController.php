<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fabricante;

class FabricanteController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
  
     public function index() {
        return Fabricante::all();
    }

    public function show(Request $request) {
        $fabricante = Fabricante::find($request->input('fabricantes_id'));
        return  $fabricante;
    }

    public function store(Request $request) {
        $fabricante = Fabricante::create($request->all());
        return response()->json($fabricante, 201);
    }

    public function update(Request $request, Fabricante $fabricante) {
        $fabricante->update($request->all());
        return response()->json($fabricante, 200);
    }

    public function delete(Fabricante $fabricante) {
        $fabricante->delete();
        return response()->json(null, 204);
    }
}
