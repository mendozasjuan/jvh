<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Exportacion;

class ExportacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Exportacion::first();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request['id'] != null){
            return $this->update($request,$request['id']);
        }

        $image = $this->storeImagenes($request);

        if($image['encabezado_imagen_fondo'] !=null )
            $encabezado_imagen_fondo = $image['encabezado_imagen_fondo'];
        else
            $encabezado_imagen_fondo = null;
        

        if($image['logo_1_encabezado'] !=null )
            $logo_1_encabezado = $image['logo_1_encabezado'];
        else
            $logo_1_encabezado = null;
        

        if($image['logo_2_encabezado'] !=null )
            $logo_2_encabezado = $image['logo_2_encabezado'];
        else
            $logo_2_encabezado = null;

        if($image['seccion1_imagen'] !=null )
            $seccion1_imagen = $image['seccion1_imagen'];
        else
            $seccion1_imagen = null;

        if($image['seccion2_imagen_fondo'] !=null )
            $seccion2_imagen_fondo = $image['seccion2_imagen_fondo'];
        else
            $seccion2_imagen_fondo = null;

        if($image['seccion3_imagen_fondo'] !=null )
            $seccion3_imagen_fondo = $image['seccion3_imagen_fondo'];
        else
            $seccion3_imagen_fondo = null;
        

        $exportacion = Exportacion::create([
           'encabezado_imagen_fondo' => $encabezado_imagen_fondo,
           'logo_1_encabezado' => $logo_1_encabezado,
           'logo_2_encabezado' => $logo_2_encabezado,
           'texto_encabezado' => $request['texto_encabezado'],
           'texto_encabezado_habilitado' => $request['texto_encabezado_habilitado'],
           'seccion1_titulo' => $request['seccion1_titulo'],
           'seccion1_parrafo' => $request['seccion1_parrafo'],
           'seccion1_imagen' => $seccion1_imagen,
           'seccion2_parrafo1' => $request['seccion2_parrafo1'],
           'seccion2_parrafo2' => $request['seccion2_parrafo2'],
           'seccion2_imagen_fondo' => $seccion2_imagen_fondo,
           'seccion3_titulo' => $request['seccion3_titulo'],
           'seccion3_imagen_fondo' => $seccion3_imagen_fondo,
           

        ]);

        return $exportacion;
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

        $exportacion = Exportacion::findOrFail($id);
        $exportacion->texto_encabezado = $request['texto_encabezado'];
        $exportacion->texto_encabezado_habilitado = $request['texto_encabezado_habilitado'];
        $exportacion->seccion1_titulo = $request['seccion1_titulo'];
        $exportacion->seccion1_parrafo = $request['seccion1_parrafo'];
        $exportacion->seccion2_parrafo1 = $request['seccion2_parrafo1'];
        $exportacion->seccion2_parrafo2 = $request['seccion2_parrafo2'];
        $exportacion->seccion3_titulo = $request['seccion3_titulo'];


        
        if($image['encabezado_imagen_fondo'] !=null )
            $exportacion->encabezado_imagen_fondo = $image['encabezado_imagen_fondo'];

        if($image['logo_1_encabezado'] !=null )
            $exportacion->logo_1_encabezado = $image['logo_1_encabezado'];

        if($image['logo_2_encabezado'] !=null )
            $exportacion->logo_2_encabezado = $image['logo_2_encabezado'];

        if($image['seccion1_imagen'] !=null )
            $exportacion->seccion1_imagen = $image['seccion1_imagen'];

        if($image['seccion2_imagen_fondo'] !=null )
            $exportacion->seccion2_imagen_fondo = $image['seccion2_imagen_fondo'];

        if($image['seccion3_imagen_fondo'] !=null )
            $exportacion->seccion3_imagen_fondo = $image['seccion3_imagen_fondo'];

        

        

        $exportacion->update();
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
            // almacena y captura el nombre del archivo
            //$encabezado_imagen_fondo =  $image['encabezado_imagen_fondo']->store('img','public');
          }


          if ($request->file('logo_1_encabezado')==null)
          {
            $image['logo_1_encabezado'] = null;
          }
          else
          {
            $image['logo_1_encabezado'] = $request->file('logo_1_encabezado')->store('img','public');
            // almacena y captura el nombre del archivo
            //$logo_1_encabezado =  $image['logo_1_encabezado']->store('img','public');
          }

          if ($request->file('logo_2_encabezado')==null)
          {
            $image['logo_2_encabezado'] = null;
          }
          else
          {
            $image['logo_2_encabezado'] = $request->file('logo_2_encabezado')->store('img','public');
            // almacena y captura el nombre del archivo
            //$logo_2_encabezado =  $image['logo_2_encabezado']->store('img','public');
          }


          if ($request->file('seccion1_imagen')==null)
          {
            $image['seccion1_imagen'] = null;
          }
          else
          {
            $image['seccion1_imagen'] = $request->file('seccion1_imagen')->store('img','public');
            // almacena y captura el nombre del archivo
            //$logo_2_encabezado =  $image['logo_2_encabezado']->store('img','public');
          }

          if ($request->file('seccion2_imagen_fondo')==null)
          {
            $image['seccion2_imagen_fondo'] = null;
          }
          else
          {
            $image['seccion2_imagen_fondo'] = $request->file('seccion2_imagen_fondo')->store('img','public');
            // almacena y captura el nombre del archivo
            //$logo_2_encabezado =  $image['logo_2_encabezado']->store('img','public');
          }

          if ($request->file('seccion3_imagen_fondo')==null)
          {
            $image['seccion3_imagen_fondo'] = null;
          }
          else
          {
            $image['seccion3_imagen_fondo'] = $request->file('seccion3_imagen_fondo')->store('img','public');
            // almacena y captura el nombre del archivo
            //$logo_2_encabezado =  $image['logo_2_encabezado']->store('img','public');
          }


          


          return $image;
    }
}
