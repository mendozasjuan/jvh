<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Inicio;

class InicioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Inicio::first();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*$this->validate($request, [
            'nombre' => 'required',
            'descripcion' => 'required',
            'tamano_caja' => 'required',
            'medidas' => 'required',
            'envasado' => 'required',
            'piezas_por_caja' => 'required',
            'condiciones_termicas' => 'required',
            'especificaciones' => 'required',
            'categoria_corte_id' => 'required'

        ]);*/
        dd($request);
        $inicio = new Inicio;

        if($request['id'] != null){
            return $this->update($request,$request['id']);
        }

        $image = $this->storeImagenes($request);

       /* if($image['encabezado_imagen_fondo'] !=null )
            $encabezado_imagen_fondo = $image['encabezado_imagen_fondo'];

        if($image['logo_1_encabezado'] !=null )
            $logo_1_encabezado = $image['logo_1_encabezado'];

        if($image['logo_2_encabezado'] !=null )
            $logo_2_encabezado = $image['logo_2_encabezado'];

        if($image['seccion1_logo1'] !=null )
            $seccion1_logo1 = $image['seccion1_logo1'];

        if($image['seccion1_logo2'] !=null )
            $seccion1_logo2 = $image['seccion1_logo2'];

        if($image['seccion1_logo3'] !=null )
            $seccion1_logo3 = $image['seccion1_logo3'];

        if($image['seccion2_imagen_fondo'] !=null )
            $seccion2_imagen_fondo = $image['seccion2_imagen_fondo'];

        if($image['seccion3_imagen'] !=null )
            $seccion3_imagen = $image['seccion3_imagen'];

        if($image['seccion4_imagen_fondo'] !=null )
            $seccion4_imagen_fondo = $image['seccion4_imagen_fondo'];*/


          $inicio->setTranslations('texto_encabezado', $request['texto_encabezado'])
            ->setTranslations('seccion1_titulo', $request['seccion1_titulo'])
            ->setTranslations('seccion_1_parrafo', $request['seccion_1_parrafo'])
            ->setTranslations('seccio2_titulo', $request['seccio2_titulo'])
            ->setTranslations('seccion_2_parrafo', $request['seccion_2_parrafo'])
            ->setTranslations('seccion3_titulo', $request['seccion3_titulo'])
            ->setTranslations('seccion3_parrafo', $request['seccion3_parrafo'])
            ->setTranslations('seccion4_titulo', $request['seccion4_titulo']);

        $inicio->texto_encabezado_habilitado = $request['texto_encabezado_habilitado'];

        if($image['encabezado_imagen_fondo'] !=null )
            $inicio->encabezado_imagen_fondo = $image['encabezado_imagen_fondo'];

        if($image['logo_1_encabezado'] !=null )
            $inicio->logo_1_encabezado = $image['logo_1_encabezado'];

        if($image['logo_2_encabezado'] !=null )
            $inicio->logo_2_encabezado = $image['logo_2_encabezado'];

        if($image['seccion1_logo1'] !=null )
            $inicio->seccion1_logo1 = $image['seccion1_logo1'];

        if($image['seccion1_logo2'] !=null )
            $inicio->seccion1_logo2 = $image['seccion1_logo2'];

        if($image['seccion1_logo3'] !=null )
            $inicio->seccion1_logo3 = $image['seccion1_logo3'];

        if($image['seccion2_imagen_fondo'] !=null )
            $inicio->seccion2_imagen_fondo = $image['seccion2_imagen_fondo'];

        if($image['seccion3_imagen'] !=null )
            $inicio->seccion3_imagen = $image['seccion3_imagen'];

        if($image['seccion4_imagen_fondo'] !=null )
            $inicio->seccion4_imagen_fondo = $image['seccion4_imagen_fondo'];



        $inicio->save();

        /*$inicio = Inicio::create([
           'encabezado_imagen_fondo' => $encabezado_imagen_fondo,
           'logo_1_encabezado' => $logo_1_encabezado,
           'logo_2_encabezado' => $logo_2_encabezado,
           'texto_encabezado' => $request['texto_encabezado'],
           'texto_encabezado_habilitado' => $request['texto_encabezado_habilitado'],
           'seccion1_titulo' => $request['seccion1_titulo'],
           'seccion_1_parrafo' => $request['seccion_1_parrafo'],
           'seccion1_logo1' => $seccion1_logo1,
           'seccion1_logo2' => $seccion1_logo2,

           'seccion1_logo3' => $seccion1_logo3,
           'seccion2_imagen_fondo' => $seccion2_imagen_fondo,
           'seccio2_titulo' => $request['seccio2_titulo'],
           'seccion_2_parrafo' => $request['seccion_2_parrafo'],
           'seccion3_titulo' => $request['seccion3_titulo'],
           'seccion3_parrafo' => $request['seccion3_parrafo'],
           'seccion3_imagen' => $seccion3_imagen,
           'seccion4_titulo' => $request['seccion4_titulo'],
           'seccion4_imagen_fondo' => $seccion4_imagen_fondo,
        ]);*/

        return $inicio;
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
      //dd($request['texto_encabezado']);
        $image = $this->storeImagenes($request);

        $inicio = Inicio::findOrFail($id);
        $inicio->setTranslations('texto_encabezado', $request['texto_encabezado'])
        ->setTranslations('seccion1_titulo', $request['seccion1_titulo'])
        ->setTranslations('seccion_1_parrafo', $request['seccion_1_parrafo'])
        ->setTranslations('seccio2_titulo', $request['seccio2_titulo'])
        ->setTranslations('seccion_2_parrafo', $request['seccion_2_parrafo'])
        ->setTranslations('seccion3_titulo', $request['seccion3_titulo'])
        ->setTranslations('seccion3_parrafo', $request['seccion3_parrafo'])
        ->setTranslations('seccion4_titulo', $request['seccion4_titulo']);

        $inicio->texto_encabezado_habilitado = $request['texto_encabezado_habilitado'];
        /*
        $inicio->texto_encabezado = $request['texto_encabezado'];
        $inicio->texto_encabezado_habilitado = $request['texto_encabezado_habilitado'];
        $inicio->seccion1_titulo = $request['seccion1_titulo'];
        $inicio->seccion_1_parrafo = $request['seccion_1_parrafo'];
        $inicio->seccio2_titulo = $request['seccio2_titulo'];
        $inicio->seccion_2_parrafo = $request['seccion_2_parrafo'];
        $inicio->seccion3_titulo = $request['seccion3_titulo'];
        $inicio->seccion3_parrafo = $request['seccion3_parrafo'];
        $inicio->seccion4_titulo = $request['seccion4_titulo'];*/


        if($image['encabezado_imagen_fondo'] !=null )
            $inicio->encabezado_imagen_fondo = $image['encabezado_imagen_fondo'];

        if($image['logo_1_encabezado'] !=null )
            $inicio->logo_1_encabezado = $image['logo_1_encabezado'];

        if($image['logo_2_encabezado'] !=null )
            $inicio->logo_2_encabezado = $image['logo_2_encabezado'];

        if($image['seccion1_logo1'] !=null )
            $inicio->seccion1_logo1 = $image['seccion1_logo1'];

        if($image['seccion1_logo2'] !=null )
            $inicio->seccion1_logo2 = $image['seccion1_logo2'];

        if($image['seccion1_logo3'] !=null )
            $inicio->seccion1_logo3 = $image['seccion1_logo3'];

        if($image['seccion2_imagen_fondo'] !=null )
            $inicio->seccion2_imagen_fondo = $image['seccion2_imagen_fondo'];

        if($image['seccion3_imagen'] !=null )
            $inicio->seccion3_imagen = $image['seccion3_imagen'];

        if($image['seccion4_imagen_fondo'] !=null )
            $inicio->seccion4_imagen_fondo = $image['seccion4_imagen_fondo'];

        $inicio->update();
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

          if ($request->file('seccion1_logo3')==null)
          {
            $image['seccion1_logo3'] = null;
          }
          else
          {
            $image['seccion1_logo3'] = $request->file('seccion1_logo3')->store('img','public');
            // almacena y captura el nombre del archivo
            //$seccion1_logo3 =  $image['seccion1_logo3']->store('img','public');
          }


          if ($request->file('seccion2_imagen_fondo')==null)
          {
            $image['seccion2_imagen_fondo'] = null;
          }
          else
          {
            $image['seccion2_imagen_fondo'] = $request->file('seccion2_imagen_fondo')->store('img','public');
            // almacena y captura el nombre del archivo
            //$seccion2_imagen_fondo =  $image['seccion2_imagen_fondo']->store('img','public');
          }


          if ($request->file('seccion3_imagen')==null)
          {
            $image['seccion3_imagen'] = null;
          }
          else
          {
            $image['seccion3_imagen'] = $request->file('seccion3_imagen')->store('img','public');
            // almacena y captura el nombre del archivo
            //$seccion3_imagen =  $image['seccion3_imagen']->store('img','public');
          }

          if ($request->file('seccion4_imagen_fondo')==null)
          {
            $image['seccion4_imagen_fondo'] = null;
          }
          else
          {
            $image['seccion4_imagen_fondo'] = $request->file('seccion4_imagen_fondo')->store('img','public');
            // almacena y captura el nombre del archivo
            //$seccion4_imagen_fondo =  $image['seccion4_imagen_fondo']->store('img','public');
          }

          return $image;
    }
}
