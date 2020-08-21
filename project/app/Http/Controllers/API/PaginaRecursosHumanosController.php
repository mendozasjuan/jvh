<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
Use App\PaginaRecursosHumanos;

class PaginaRecursosHumanosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return PaginaRecursosHumanos::first();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    	$paginarecursoshumanos = new PaginaRecursosHumanos;

        if($request['id'] != null){
            return $this->update($request,$request['id']);
        }

        $image = $this->storeImagenes($request);

        $paginarecursoshumanos->setTranslations('seccion1_titulo', ['es' => $request['seccion1_titulo'],'zh' =>$request['seccion1_titulo_zh'] ] )
            ->setTranslations('seccion1_parrafo', ['es' => $request['seccion1_parrafo'],'zh' =>$request['seccion1_parrafo_zh'] ] );

        if($image['encabezado_imagen_fondo'] !=null )
            $paginarecursoshumanos->encabezado_imagen_fondo = $image['encabezado_imagen_fondo'];
        else
            $paginarecursoshumanos->encabezado_imagen_fondo = null;
        

        
        $paginarecursoshumanos->save();

        return $paginarecursoshumanos;
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
        $image = $this->storeImagenes($request);

        $paginarecursoshumanos = PaginaRecursosHumanos::findOrFail($id);
        $paginarecursoshumanos->setTranslations('seccion1_titulo', ['es' => $request['seccion1_titulo'],'zh' =>$request['seccion1_titulo_zh'] ] )
            ->setTranslations('seccion1_parrafo', ['es' => $request['seccion1_parrafo'],'zh' =>$request['seccion1_parrafo_zh'] ] );

        if($image['encabezado_imagen_fondo'] !=null )
            $paginarecursoshumanos->encabezado_imagen_fondo = $image['encabezado_imagen_fondo'];
        else
            $paginarecursoshumanos->encabezado_imagen_fondo = null;

        $paginarecursoshumanos->update();
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

    public function storeImagenes($request)
    {
        if ($request->file('encabezado_imagen_fondo')==null)
          {
            $image['encabezado_imagen_fondo'] = null;
          }
          else
          {
            $image['encabezado_imagen_fondo'] = $request->file('encabezado_imagen_fondo')->store('img','public');
          }

          return $image;
    }
}
