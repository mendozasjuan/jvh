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
        return Exportacion::with('sliders')->first();
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
            //'encabezado_imagen_fondo' => 'required',
            'seccion1_titulo' => 'required',
            'seccion1_parrafo' => 'required',
            'seccion1_imagen' => 'required',
            'seccion2_parrafo1' => 'required',
            'seccion2_parrafo2' => 'required',
            'seccion2_imagen_fondo' => 'required',
            'seccion3_titulo' => 'required',
            'seccion3_imagen_fondo' => 'required'

        ]);
    	$exportacion = new Exportacion;

        if($request['id'] != null){
            return $this->update($request,$request['id']);
        }

        $image = $this->storeImagenes($request);

        $exportacion->setTranslations('texto_encabezado', [
            'es' => $request['texto_encabezado'],
            'zh' =>$request['texto_encabezado_zh'],
            'en' =>$request['texto_encabezado_en'],
         ] )
            ->setTranslations('seccion1_titulo', [
                'es' => $request['seccion1_titulo'],
                'zh' =>$request['seccion1_titulo_zh'],
                'en' =>$request['seccion1_titulo_en'],
             ] )
            ->setTranslations('seccion1_parrafo', [
                'es' => $request['seccion1_parrafo'],
                'zh' =>$request['seccion1_parrafo_zh'],
                'en' =>$request['seccion1_parrafo_en']
             ])
            ->setTranslations('seccion2_parrafo1', [
                'es' => $request['seccion2_parrafo1'],
                'zh' =>$request['seccion2_parrafo1_zh'],
                'en' =>$request['seccion2_parrafo1_en
                ']
             ])
            ->setTranslations('seccion2_parrafo2', [
                'es' => $request['seccion2_parrafo2'],
                'zh' =>$request['seccion2_parrafo2_zh'],
                'en' =>$request['seccion2_parrafo1_en']
             ])
            ->setTranslations('seccion3_titulo', [
                'es' => $request['seccion3_titulo'],
                'zh' =>$request['seccion3_titulo_zh'],
                'en' =>$request['seccion2_parrafo1_en']
             ]);


            $exportacion->texto_encabezado_habilitado = $request['texto_encabezado_habilitado'];

        if($image['encabezado_imagen_fondo'] !=null )
            $exportacion->encabezado_imagen_fondo = $image['encabezado_imagen_fondo'];
        else
            $exportacion->encabezado_imagen_fondo = null;
        

        if($image['logo_1_encabezado'] !=null )
            $exportacion->logo_1_encabezado = $image['logo_1_encabezado'];
        else
            $exportacion->logo_1_encabezado = null;
        

        if($image['logo_2_encabezado'] !=null )
            $exportacion->logo_2_encabezado = $image['logo_2_encabezado'];
        else
            $exportacion->logo_2_encabezado = null;

        if($image['seccion1_imagen'] !=null )
            $exportacion->seccion1_imagen = $image['seccion1_imagen'];
        else
            $exportacion->seccion1_imagen = null;

        if($image['seccion2_imagen_fondo'] !=null )
            $exportacion->seccion2_imagen_fondo = $image['seccion2_imagen_fondo'];
        else
            $exportacion->seccion2_imagen_fondo = null;

        if($image['seccion3_imagen_fondo'] !=null )
            $exportacion->seccion3_imagen_fondo = $image['seccion3_imagen_fondo'];
        else
            $exportacion->seccion3_imagen_fondo = null;
        
        $exportacion->save();

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
        $exportacion->setTranslations('texto_encabezado', [
            'es' => $request['texto_encabezado'],
            'zh' =>$request['texto_encabezado_zh'],
            'en' =>$request['texto_encabezado_en'],
         ] )
            ->setTranslations('seccion1_titulo', [
                'es' => $request['seccion1_titulo'],
                'zh' =>$request['seccion1_titulo_zh'],
                'en' =>$request['seccion1_titulo_en'],
             ] )
            ->setTranslations('seccion1_parrafo', [
                'es' => $request['seccion1_parrafo'],
                'zh' =>$request['seccion1_parrafo_zh'],
                'en' =>$request['seccion1_parrafo_en']
             ])
            ->setTranslations('seccion2_parrafo1', [
                'es' => $request['seccion2_parrafo1'],
                'zh' =>$request['seccion2_parrafo1_zh'],
                'en' =>$request['seccion2_parrafo1_en']
             ])
            ->setTranslations('seccion2_parrafo2', [
                'es' => $request['seccion2_parrafo2'],
                'zh' =>$request['seccion2_parrafo2_zh'],
                'en' =>$request['seccion2_parrafo2_en']
             ])
            ->setTranslations('seccion3_titulo', [
                'es' => $request['seccion3_titulo'],
                'zh' =>$request['seccion3_titulo_zh'],
                'en' =>$request['seccion3_titulo_en']
             ]);

        $exportacion->texto_encabezado_habilitado = $request['texto_encabezado_habilitado'];

        
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
