<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Corte;

class CorteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Corte::paginate(10);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nombre' => 'required',
            'descripcion' => 'required',
            'tamano_caja' => 'required',
            'medidas' => 'required',
            'envasado' => 'required',
            'piezas_por_caja' => 'required',
            'condiciones_termicas' => 'required',
            'especificaciones' => 'required',

        ]);

        return Corte::create([
           'nombre' => $request['nombre'],
           'descripcion' => $request['descripcion'],
           'tamano_caja' => $request['tamano_caja'],
           'medidas' => $request['medidas'],
           'envasado' => $request['envasado'],
           'piezas_por_caja' => $request['piezas_por_caja'],
           'condiciones_termicas' => $request['condiciones_termicas'],
           'especificaciones' => $request['especificaciones'],
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nombre' => 'required',
            'descripcion' => 'required',
            'tamano_caja' => 'required',
            'medidas' => 'required',
            'envasado' => 'required',
            'piezas_por_caja' => 'required',
            'condiciones_termicas' => 'required',
            'especificaciones' => 'required',
        ]);

        $corte = Corte::findOrFail($id);
        $corte->nombre = $request['nombre'];
        $corte->descripcion = $request['descripcion'];
        $corte->tamano_caja = $request['tamano_caja'];
        $corte->medidas = $request['medidas'];
        $corte->envasado = $request['envasado'];
        $corte->piezas_por_caja = $request['piezas_por_caja'];
        $corte->condiciones_termicas = $request['condiciones_termicas'];
        $corte->especificaciones = $request['especificaciones'];

        $corte->update();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $corte = Corte::findOrFail($id);
        $corte->delete();
        return response()->json([
         'message' => 'Corte deleted successfully'
        ]);
    }
}
