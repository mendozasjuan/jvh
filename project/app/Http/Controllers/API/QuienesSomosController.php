<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\QuienesSomos;

class QuienesSomosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return QuienesSomos::first();
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

        if($image['encabezado_imagen_fondo'] !=null ){
            $encabezado_imagen_fondo = $image['encabezado_imagen_fondo'];
        }else{
            $encabezado_imagen_fondo = null;
        }

        if($image['logo_1_encabezado'] !=null ){
            $logo_1_encabezado = $image['logo_1_encabezado'];
        }else{
            $logo_1_encabezado = null;
        }

        if($image['logo_2_encabezado'] !=null )
            $logo_2_encabezado = $image['logo_2_encabezado'];
        else
            $logo_2_encabezado = null;

        if($image['seccion1_imagen_fondo'] !=null )
            $seccion1_imagen_fondo = $image['seccion1_imagen_fondo'];
        else
            $seccion1_imagen_fondo = null;

        if($image['seccion2_imagen_fondo'] !=null )
            $seccion2_imagen_fondo = $image['seccion2_imagen_fondo'];
        else
            $seccion2_imagen_fondo = null;

        if($image['seccion4_imagen_fondo'] !=null )
            $seccion4_imagen_fondo = $image['seccion4_imagen_fondo'];
        else
            $seccion4_imagen_fondo = null;

        $quienessomos = QuienesSomos::create([
           'encabezado_imagen_fondo' => $encabezado_imagen_fondo,
           'logo_1_encabezado' => $logo_1_encabezado,
           'logo_2_encabezado' => $logo_2_encabezado,
           'texto_encabezado' => $request['texto_encabezado'],
           'texto_encabezado_habilitado' => $request['texto_encabezado_habilitado'],
           'seccio1_parrafo1' => $request['seccio1_parrafo1'],
           'seccio1_parrafo2' => $request['seccio1_parrafo2'],
           'seccio1_parrafo3' => $request['seccio1_parrafo3'],
           'seccio1_parrafo4' => $request['seccio1_parrafo4'],

           'seccion1_imagen_fondo' => $seccion1_imagen_fondo,
           'seccion2_titulo' => $request['seccion2_titulo'],
           'seccion2_parrafo' => $request['seccion2_parrafo'],
           'seccion2_imagen_fondo' => $seccion2_imagen_fondo,
           'seccion3_parrafo1' => $request['seccion3_parrafo1'],
           'seccion3_parrafo2' => $request['seccion3_parrafo2'],
           'seccion4_parrafo1' => $request['seccion4_parrafo1'],
           'seccion4_parrafo2' => $request['seccion4_parrafo2'],
           'seccion4_parrafo3' => $request['seccion4_parrafo3'],

           'seccion4_parrafo4' => $request['seccion4_parrafo4'],
           'seccion4_imagen_fondo' => $seccion4_imagen_fondo,
        ]);

        return $quienessomos;
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

        $quienessomos = QuienesSomos::findOrFail($id);
        $quienessomos->texto_encabezado = $request['texto_encabezado'];
        $quienessomos->texto_encabezado_habilitado = $request['texto_encabezado_habilitado'];
        $quienessomos->seccio1_parrafo1 = $request['seccio1_parrafo1'];
        $quienessomos->seccio1_parrafo2 = $request['seccio1_parrafo2'];
        $quienessomos->seccio1_parrafo3 = $request['seccio1_parrafo3'];
        $quienessomos->seccio1_parrafo4 = $request['seccio1_parrafo4'];
        $quienessomos->seccion2_titulo = $request['seccion2_titulo'];
        $quienessomos->seccion2_parrafo = $request['seccion2_parrafo'];
        $quienessomos->seccion3_parrafo1 = $request['seccion3_parrafo1'];

        $quienessomos->seccion3_parrafo2 = $request['seccion3_parrafo2'];
        $quienessomos->seccion4_parrafo1 = $request['seccion4_parrafo1'];
        $quienessomos->seccion4_parrafo2 = $request['seccion4_parrafo2'];
        $quienessomos->seccion4_parrafo3 = $request['seccion4_parrafo3'];
        $quienessomos->seccion4_parrafo4 = $request['seccion4_parrafo4'];


        
        if($image['encabezado_imagen_fondo'] !=null )
            $quienessomos->encabezado_imagen_fondo = $image['encabezado_imagen_fondo'];

        if($image['logo_1_encabezado'] !=null )
            $quienessomos->logo_1_encabezado = $image['logo_1_encabezado'];

        if($image['logo_2_encabezado'] !=null )
            $quienessomos->logo_2_encabezado = $image['logo_2_encabezado'];

        if($image['seccion1_imagen_fondo'] !=null )
            $quienessomos->seccion1_imagen_fondo = $image['seccion1_imagen_fondo'];

        if($image['seccion2_imagen_fondo'] !=null )
            $quienessomos->seccion2_imagen_fondo = $image['seccion2_imagen_fondo'];

        if($image['seccion4_imagen_fondo'] !=null )
            $quienessomos->seccion4_imagen_fondo = $image['seccion4_imagen_fondo'];

        

        $quienessomos->update();
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


          if ($request->file('seccion1_imagen_fondo')==null)
          {
            $image['seccion1_imagen_fondo'] = null;
          }
          else
          {
            $image['seccion1_imagen_fondo'] = $request->file('seccion1_imagen_fondo')->store('img','public');
            // almacena y captura el nombre del archivo
            //$seccion1_logo1 =  $image['seccion1_logo1']->store('img','public');
          }


          if ($request->file('seccion2_imagen_fondo')==null)
          {
            $image['seccion2_imagen_fondo'] = null;
          }
          else
          {
            $image['seccion2_imagen_fondo'] = $request->file('seccion2_imagen_fondo')->store('img','public');
            // almacena y captura el nombre del archivo
            //$seccion1_logo2 =  $image['seccion1_logo2']->store('img','public');
          }

          if ($request->file('seccion4_imagen_fondo')==null)
          {
            $image['seccion4_imagen_fondo'] = null;
          }
          else
          {
            $image['seccion4_imagen_fondo'] = $request->file('seccion4_imagen_fondo')->store('img','public');
            // almacena y captura el nombre del archivo
            //$seccion1_logo3 =  $image['seccion1_logo3']->store('img','public');
          }


          return $image;
    }
}