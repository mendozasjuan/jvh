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
        $inicio = new Inicio;

        if($request['id'] != null){
            return $this->update($request,$request['id']);
        }

        $image = $this->storeImagenes($request);


          $inicio->setTranslations('texto_encabezado', ['es' => $request['texto_encabezado'],'zh' =>$request['texto_encabezado_zh'] ] )
            ->setTranslations('seccion1_titulo', ['es' => $request['seccion1_titulo'],'zh' =>$request['seccion1_titulo_zh'] ] )
            ->setTranslations('seccion_1_parrafo', ['es' => $request['seccion_1_parrafo'],'zh' =>$request['seccion_1_parrafo_zh'] ])
            ->setTranslations('seccio2_titulo', ['es' => $request['seccio2_titulo'],'zh' =>$request['seccio2_titulo_zh'] ])
            ->setTranslations('seccion_2_parrafo', ['es' => $request['seccion_2_parrafo'],'zh' =>$request['seccion_2_parrafo_zh'] ])
            ->setTranslations('seccion3_titulo', ['es' => $request['seccion3_titulo'],'zh' =>$request['seccion3_titulo_zh'] ])
            ->setTranslations('seccion3_parrafo', ['es' => $request['seccion3_parrafo'],'zh' =>$request['seccion3_parrafo_zh'] ])
            ->setTranslations('seccion4_titulo', ['es' => $request['seccion4_titulo'],'zh' =>$request['seccion4_titulo_zh'] ]);

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
        $image = $this->storeImagenes($request);

        $inicio = Inicio::findOrFail($id);
        $inicio->setTranslations('texto_encabezado', ['es' => $request['texto_encabezado'],'zh' =>$request['texto_encabezado_zh'] ] )
            ->setTranslations('seccion1_titulo', ['es' => $request['seccion1_titulo'],'zh' =>$request['seccion1_titulo_zh'] ] )
            ->setTranslations('seccion_1_parrafo', ['es' => $request['seccion_1_parrafo'],'zh' =>$request['seccion_1_parrafo_zh'] ])
            ->setTranslations('seccio2_titulo', ['es' => $request['seccio2_titulo'],'zh' =>$request['seccio2_titulo_zh'] ])
            ->setTranslations('seccion_2_parrafo', ['es' => $request['seccion_2_parrafo'],'zh' =>$request['seccion_2_parrafo_zh'] ])
            ->setTranslations('seccion3_titulo', ['es' => $request['seccion3_titulo'],'zh' =>$request['seccion3_titulo_zh'] ])
            ->setTranslations('seccion3_parrafo', ['es' => $request['seccion3_parrafo'],'zh' =>$request['seccion3_parrafo_zh'] ])
            ->setTranslations('seccion4_titulo', ['es' => $request['seccion4_titulo'],'zh' =>$request['seccion4_titulo_zh'] ]);

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
