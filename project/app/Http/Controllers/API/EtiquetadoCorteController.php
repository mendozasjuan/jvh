<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\EtiquetadoCorte;

class EtiquetadoCorteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function saveEtiquetado(Request $request){
        if($request->file('etiquetadoproducto')){
            $etiquetadoproducto = $request->file('etiquetadoproducto')->store('img/etiquetado','public');
            $etiquetadoCorte = EtiquetadoCorte::create([
                'etiquetado' => $etiquetadoproducto,
                'corte_id' => $request['corteid']
            ]);

            return $etiquetadoCorte;
        }

    }

    public function updateEtiquetado(Request $request,$id){
        $etiquetado = EtiquetadoCorte::find($id);
        $etiquetadoOld = $etiquetado->etiquetado;

        if($request->file('etiquetadoproducto')){
            $etiquetadoNew = $request->file('etiquetadoproducto')->store('img/etiquetado','public');
            $etiquetado->etiquetado = $etiquetadoNew;
            $etiquetado->update();

            $exists = Storage::disk('public')->exists($etiquetadoOld);

            if($exists){
                Storage::disk('public')->delete($etiquetadoOld);
            }

            return $etiquetado;
        }

    }

    public function deleteEtiquetado($id){
        $etiquetado = EtiquetadoCorte::find($id);
        
        $exists = Storage::disk('public')->exists($etiquetado->etiquetado);

        if($exists){
            Storage::disk('public')->delete($etiquetado->etiquetado);
        }

        $etiquetado->delete();

        return response()->json([
         'message' => 'etiquetado borrado con exito'
        ]);
    }

    public function allEtiquetadosProducto($corteid){
        $etiquetados = EtiquetadoCorte::where('corte_id',$corteid)->get();
        return $etiquetados;

    }
}
