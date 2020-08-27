<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
Use App\Calidad;

class CalidadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Calidad::with('sliders')->first();
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
            'seccion1_logo1' => 'required',
            'seccion1_logo2' => 'required',
            'seccion1_logo3' => 'required',
            'seccion1_logo4' => 'required',
            'seccion1_logo5' => 'required',
            'seccion1_logo6' => 'required',
            'seccion1_logo7' => 'required',
            'seccion2_imagen_fondo' => 'required',

        ]);

    	$calidad = new Calidad;

        if($request['id'] != null){
            return $this->update($request,$request['id']);
        }

        $image = $this->storeImagenes($request);

        $calidad->setTranslations('texto_encabezado', [
            'es' => $request['texto_encabezado'],
            'zh' =>$request['texto_encabezado_zh'],
            'en' =>$request['texto_encabezado_en']
         ] )
            ->setTranslations('seccion1_titulo', [
                'es' => $request['seccion1_titulo'],
                'zh' =>$request['seccion1_titulo_zh'],
                'en' =>$request['seccion1_titulo_en']
             ] )
            ->setTranslations('seccion1_parrafo', [
                'es' => $request['seccion1_parrafo'],
                'zh' =>$request['seccion1_parrafo_zh'],
                'en' =>$request['seccion1_parrafo_en']
            ]);


            $calidad->texto_encabezado_habilitado = $request['texto_encabezado_habilitado'];

        if($image['encabezado_imagen_fondo'] !=null )
            $calidad->encabezado_imagen_fondo = $image['encabezado_imagen_fondo'];
        else
            $calidad->encabezado_imagen_fondo = null;
        

        if($image['logo_1_encabezado'] !=null )
            $calidad->logo_1_encabezado = $image['logo_1_encabezado'];
        else
            $calidad->logo_1_encabezado = null;
        

        if($image['logo_2_encabezado'] !=null )
            $calidad->logo_2_encabezado = $image['logo_2_encabezado'];
        else
            $calidad->logo_2_encabezado = null;

        if($image['seccion1_logo1'] !=null )
            $calidad->seccion1_logo1 = $image['seccion1_logo1'];
        else
            $calidad->seccion1_logo1 = null;

        if($image['seccion1_logo2'] !=null )
            $calidad->seccion1_logo2 = $image['seccion1_logo2'];
        else
            $calidad->seccion1_logo2 = null;

        if($image['seccion1_logo3'] !=null )
            $calidad->seccion1_logo3 = $image['seccion1_logo3'];
        else
            $calidad->seccion1_logo3 = null;

        if($image['seccion1_logo4'] !=null )
            $calidad->seccion1_logo4 = $image['seccion1_logo4'];
        else
            $calidad->seccion1_logo4 = null;

        if($image['seccion1_logo5'] !=null )
            $calidad->seccion1_logo5 = $image['seccion1_logo5'];
        else
            $calidad->seccion1_logo5 = null;

        if($image['seccion1_logo6'] !=null )
            $calidad->seccion1_logo6 = $image['seccion1_logo6'];
        else
            $calidad->seccion1_logo6 = null;

        if($image['seccion1_logo7'] !=null )
            $calidad->seccion1_logo7 = $image['seccion1_logo7'];
        else
            $calidad->seccion1_logo7 = null;


        if($image['seccion2_imagen_fondo'] !=null )
            $calidad->seccion2_imagen_fondo = $image['seccion2_imagen_fondo'];
        else
            $calidad->seccion2_imagen_fondo = null;

        $calidad->save();

        return $calidad;
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

        $calidad = Calidad::findOrFail($id);
        $calidad->setTranslations('texto_encabezado', [
            'es' => $request['texto_encabezado'],
            'zh' =>$request['texto_encabezado_zh'],
            'en' =>$request['texto_encabezado_en']
         ] )
            ->setTranslations('seccion1_titulo', [
                'es' => $request['seccion1_titulo'],
                'zh' =>$request['seccion1_titulo_zh'],
                'en' =>$request['seccion1_titulo_en']
             ] )
            ->setTranslations('seccion1_parrafo', [
                'es' => $request['seccion1_parrafo'],
                'zh' =>$request['seccion1_parrafo_zh'],
                'en' =>$request['seccion1_parrafo_en']
            ]);


            $calidad->texto_encabezado_habilitado = $request['texto_encabezado_habilitado'];


        
        if($image['encabezado_imagen_fondo'] !=null )
            $calidad->encabezado_imagen_fondo = $image['encabezado_imagen_fondo'];

        if($image['logo_1_encabezado'] !=null )
            $calidad->logo_1_encabezado = $image['logo_1_encabezado'];

        if($image['logo_2_encabezado'] !=null )
            $calidad->logo_2_encabezado = $image['logo_2_encabezado'];

        if($image['seccion1_logo1'] !=null )
            $calidad->seccion1_logo1 = $image['seccion1_logo1'];

        if($image['seccion1_logo2'] !=null )
            $calidad->seccion1_logo2 = $image['seccion1_logo2'];

        if($image['seccion1_logo3'] !=null )
            $calidad->seccion1_logo3 = $image['seccion1_logo3'];

        if($image['seccion1_logo4'] !=null )
            $calidad->seccion1_logo4 = $image['seccion1_logo4'];

        if($image['seccion1_logo5'] !=null )
            $calidad->seccion1_logo5 = $image['seccion1_logo5'];

        if($image['seccion1_logo6'] !=null )
            $calidad->seccion1_logo6 = $image['seccion1_logo6'];

        if($image['seccion1_logo7'] !=null )
            $calidad->seccion1_logo7 = $image['seccion1_logo7'];

        if($image['seccion2_imagen_fondo'] !=null )
            $calidad->seccion2_imagen_fondo = $image['seccion2_imagen_fondo'];

  

        $calidad->update();
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
            //$logo_2_encabezado =  $image['logo_2_encabezado']->store('img','public');
          }

          if ($request->file('seccion1_logo2')==null)
          {
            $image['seccion1_logo2'] = null;
          }
          else
          {
            $image['seccion1_logo2'] = $request->file('seccion1_logo2')->store('img','public');
            // almacena y captura el nombre del archivo
            //$logo_2_encabezado =  $image['logo_2_encabezado']->store('img','public');
          }

          if ($request->file('seccion1_logo3')==null)
          {
            $image['seccion1_logo3'] = null;
          }
          else
          {
            $image['seccion1_logo3'] = $request->file('seccion1_logo3')->store('img','public');
            // almacena y captura el nombre del archivo
            //$logo_2_encabezado =  $image['logo_2_encabezado']->store('img','public');
          }

          if ($request->file('seccion1_logo4')==null)
          {
            $image['seccion1_logo4'] = null;
          }
          else
          {
            $image['seccion1_logo4'] = $request->file('seccion1_logo4')->store('img','public');
            // almacena y captura el nombre del archivo
            //$logo_2_encabezado =  $image['logo_2_encabezado']->store('img','public');
          }

          if ($request->file('seccion1_logo5')==null)
          {
            $image['seccion1_logo5'] = null;
          }
          else
          {
            $image['seccion1_logo5'] = $request->file('seccion1_logo5')->store('img','public');
            // almacena y captura el nombre del archivo
            //$logo_2_encabezado =  $image['logo_2_encabezado']->store('img','public');
          }

          if ($request->file('seccion1_logo6')==null)
          {
            $image['seccion1_logo6'] = null;
          }
          else
          {
            $image['seccion1_logo6'] = $request->file('seccion1_logo6')->store('img','public');
            // almacena y captura el nombre del archivo
            //$logo_2_encabezado =  $image['logo_2_encabezado']->store('img','public');
          }

          if ($request->file('seccion1_logo7')==null)
          {
            $image['seccion1_logo7'] = null;
          }
          else
          {
            $image['seccion1_logo7'] = $request->file('seccion1_logo7')->store('img','public');
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



          return $image;
    }
}
