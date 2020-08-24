<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Corte;
use App\ImagenCorte;
use App\EtiquetadoCorte;
use App\PackagingCorte;

class CorteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Corte::with('categoria')
                ->with('imagenes')
                ->with('etiquetados')
                ->with('packagings')
                ->get();
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
            'categoria_corte_id' => 'required'

        ]);

        

        $corte = Corte::create([
           'nombre' => $request['nombre'],
           'descripcion' => $request['descripcion'],
           'tamano_caja' => $request['tamano_caja'],
           'medidas' => $request['medidas'],
           'envasado' => $request['envasado'],
           'piezas_por_caja' => $request['piezas_por_caja'],
           'condiciones_termicas' => $request['condiciones_termicas'],
           'especificaciones' => $request['especificaciones'],
           'categoria_corte_id' => $request['categoria_corte_id'],
        ]);

        if ($request->file('imagen_corte')==null)
          {
            $imagen_corte = null;
          }
          else
          {
            $image['imagen_corte'] = $request->file('imagen_corte');
            // almacena y captura el nombre del archivo
            $imagen_corte =  $image['imagen_corte']->store('img/producto','public');
            if($imagen_corte){
                ImagenCorte::create([
                    'imagen' => $imagen_corte,
                    'corte_id' => $corte->id
                ]);
            }
          }

          if ($request->file('imagen_etiquetado')==null)
          {
            $imagen_etiquetado = null;
          }
          else
          {
            $image['imagen_etiquetado'] = $request->file('imagen_etiquetado');
            // almacena y captura el nombre del archivo
            $imagen_etiquetado =  $image['imagen_etiquetado']->store('img/etiquetado','public');
            if($imagen_etiquetado){
                EtiquetadoCorte::create([
                    'etiquetado' => $imagen_etiquetado,
                    'corte_id' => $corte->id
                ]);
            }
          }

          if ($request->file('imagen_packaging')==null)
          {
            $imagen_packaging = null;
          }
          else
          {
            $image['imagen_packaging'] = $request->file('imagen_packaging');
            // almacena y captura el nombre del archivo
            $imagen_packaging =  $image['imagen_packaging']->store('img/packaging','public');
            if($imagen_packaging){
                PackagingCorte::create([
                    'packaging' => $imagen_packaging,
                    'corte_id' => $corte->id
                ]);
            }
          }

        return $corte;
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
        $corte->categoria_corte_id = $request['categoria_corte_id'];

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
