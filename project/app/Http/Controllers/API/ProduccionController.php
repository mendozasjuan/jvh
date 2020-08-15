<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Produccion;

class ProduccionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Produccion::first();
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

        if($image['seccion1_logo1'] !=null )
            $seccion1_logo1 = $image['seccion1_logo1'];
        else
            $seccion1_logo1 = null;

        if($image['seccion1_logo2'] !=null )
            $seccion1_logo2 = $image['seccion1_logo2'];
        else
            $seccion1_logo2 = null;

        if($image['seccion1_imagen_fondo'] !=null )
            $seccion1_imagen_fondo = $image['seccion1_imagen_fondo'];
        else
            $seccion1_imagen_fondo = null;

        if($image['seccion3_imagen_fondo'] !=null )
            $seccion3_imagen_fondo = $image['seccion3_imagen_fondo'];
        else
            $seccion3_imagen_fondo = null;


        $produccion = Produccion::create([
           'encabezado_imagen_fondo' => $encabezado_imagen_fondo,
           'logo_1_encabezado' => $logo_1_encabezado,
           'logo_2_encabezado' => $logo_2_encabezado,
           'texto_encabezado' => $request['texto_encabezado'],
           'texto_encabezado_habilitado' => $request['texto_encabezado_habilitado'],
           'seccion1_titulo' => $request['seccion1_titulo'],
           'seccion1_parrafo' => $request['seccion1_parrafo'],
           'seccion1_logo1' => $seccion1_logo1,
           'seccion1_logo2' => $seccion1_logo2,

           'seccion1_imagen_fondo' => $seccion1_imagen_fondo,
           'seccion2_titulo' => $request['seccion2_titulo'],
           'seccion2_parrafo1' => $request['seccion2_parrafo1'],
           'seccion2_parrafo2' => $request['seccion2_parrafo2'],
           'seccion3_titulo' => $request['seccion3_titulo'],
           'seccion3_parrafo' => $request['seccion3_parrafo'],
           'seccion3_imagen_fondo' => $seccion3_imagen_fondo,
        ]);

        return $produccion;
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

        $produccion = QuienesSomos::findOrFail($id);
        $produccion->texto_encabezado = $request['texto_encabezado'];
        $produccion->texto_encabezado_habilitado = $request['texto_encabezado_habilitado'];
        $produccion->seccion1_titulo = $request['seccion1_titulo'];
        $produccion->seccion1_parrafo = $request['seccion1_parrafo'];
        $produccion->seccion2_titulo = $request['seccion2_titulo'];
        $produccion->seccion2_parrafo1 = $request['seccion2_parrafo1'];
        $produccion->seccion2_parrafo2 = $request['seccion2_parrafo2'];
        $produccion->seccion3_titulo = $request['seccion3_titulo'];
        $produccion->seccion3_parrafo = $request['seccion3_parrafo'];


        
        if($image['encabezado_imagen_fondo'] !=null )
            $produccion->encabezado_imagen_fondo = $image['encabezado_imagen_fondo'];

        if($image['logo_1_encabezado'] !=null )
            $produccion->logo_1_encabezado = $image['logo_1_encabezado'];

        if($image['logo_2_encabezado'] !=null )
            $produccion->logo_2_encabezado = $image['logo_2_encabezado'];

        if($image['seccion1_logo1'] !=null )
            $produccion->seccion1_logo1 = $image['seccion1_logo1'];

        if($image['seccion1_logo2'] !=null )
            $produccion->seccion1_logo2 = $image['seccion1_logo2'];

        if($image['seccion1_imagen_fondo'] !=null )
            $produccion->seccion1_imagen_fondo = $image['seccion1_imagen_fondo'];

        if($image['seccion3_imagen_fondo'] !=null )
            $produccion->seccion3_imagen_fondo = $image['seccion3_imagen_fondo'];

        

        $produccion->update();
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


          if ($request->file('seccion1_logo1')==null)
          {
            $image['seccion1_logo1'] = null;
          }
          else
          {
            $image['seccion1_logo1'] = $request->file('seccion1_logo1')->store('img','public');
            // almacena y captura el nombre del archivo
            //$seccion1_logo1 =  $image['seccion1_logo1']->store('img','public');
          }


          if ($request->file('seccion1_logo2')==null)
          {
            $image['seccion1_logo2'] = null;
          }
          else
          {
            $image['seccion1_logo2'] = $request->file('seccion1_logo2')->store('img','public');
            // almacena y captura el nombre del archivo
            //$seccion1_logo2 =  $image['seccion1_logo2']->store('img','public');
          }

          if ($request->file('seccion1_imagen_fondo')==null)
          {
            $image['seccion1_imagen_fondo'] = null;
          }
          else
          {
            $image['seccion1_imagen_fondo'] = $request->file('seccion1_imagen_fondo')->store('img','public');
            // almacena y captura el nombre del archivo
            //$seccion1_logo3 =  $image['seccion1_logo3']->store('img','public');
          }


          if ($request->file('seccion3_imagen_fondo')==null)
          {
            $image['seccion3_imagen_fondo'] = null;
          }
          else
          {
            $image['seccion3_imagen_fondo'] = $request->file('seccion3_imagen_fondo')->store('img','public');
            // almacena y captura el nombre del archivo
            //$seccion1_logo3 =  $image['seccion1_logo3']->store('img','public');
          }


          return $image;
    }
}
