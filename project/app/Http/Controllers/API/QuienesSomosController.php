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
      $this->validate($request, [
            'encabezado_imagen_fondo' => 'required',
            'seccio1_parrafo1' => 'required',
            'seccio1_parrafo2' => 'required',
            'seccio1_parrafo3' => 'required',
            'seccio1_parrafo4' => 'required',
            'seccion1_imagen_fondo' => 'required',
            'seccion2_titulo' => 'required',
            'seccion2_parrafo' => 'required',
            'seccion2_imagen_fondo' => 'required',
            'seccion3_parrafo1' => 'required',
            'seccion3_parrafo2' => 'required',
            'seccion4_parrafo1' => 'required',
            'seccion4_parrafo2' => 'required',
            'seccion4_parrafo3' => 'required',
            'seccion4_parrafo4' => 'required',
            'seccion4_imagen_fondo' => 'required'

        ]);
    	$quienessomos = new QuienesSomos;

        if($request['id'] != null){
            return $this->update($request,$request['id']);
        }

        $image = $this->storeImagenes($request);

        $quienessomos->setTranslations('texto_encabezado', ['es' => $request['texto_encabezado'],'zh' =>$request['texto_encabezado_zh'] ] )
            ->setTranslations('seccio1_parrafo1', ['es' => $request['seccio1_parrafo1'],'zh' =>$request['seccio1_parrafo1_zh'] ] )
            ->setTranslations('seccio1_parrafo2', ['es' => $request['seccio1_parrafo2'],'zh' =>$request['seccio1_parrafo2_zh'] ])
            ->setTranslations('seccio1_parrafo3', ['es' => $request['seccio1_parrafo3'],'zh' =>$request['seccio1_parrafo3_zh'] ])
            ->setTranslations('seccio1_parrafo4', ['es' => $request['seccio1_parrafo4'],'zh' =>$request['seccio1_parrafo4_zh'] ])

            ->setTranslations('seccion2_titulo', ['es' => $request['seccion2_titulo'],'zh' =>$request['seccion2_titulo_zh'] ])
            ->setTranslations('seccion2_parrafo', ['es' => $request['seccion2_parrafo'],'zh' =>$request['seccion2_parrafo_zh'] ])

            ->setTranslations('seccion3_parrafo1', ['es' => $request['seccion3_parrafo1'],'zh' =>$request['seccion3_parrafo1_zh'] ])
            ->setTranslations('seccion3_parrafo2', ['es' => $request['seccion3_parrafo2'],'zh' =>$request['seccion3_parrafo2_zh'] ] )
            ->setTranslations('seccion4_parrafo1', ['es' => $request['seccion4_parrafo1'],'zh' =>$request['seccion4_parrafo1_zh'] ])
            ->setTranslations('seccion4_parrafo2', ['es' => $request['seccion4_parrafo2'],'zh' =>$request['seccion4_parrafo2_zh'] ])
            ->setTranslations('seccion4_parrafo3', ['es' => $request['seccion4_parrafo3'],'zh' =>$request['seccion4_parrafo3_zh'] ])
            ->setTranslations('seccion4_parrafo4', ['es' => $request['seccion4_parrafo4'],'zh' =>$request['seccion4_parrafo4_zh'] ]);

        $quienessomos->texto_encabezado_habilitado = $request['texto_encabezado_habilitado'];

        if($image['encabezado_imagen_fondo'] !=null ){
            $quienessomos->encabezado_imagen_fondo = $image['encabezado_imagen_fondo'];
        }else{
            $quienessomos->encabezado_imagen_fondo = null;
        }

        if($image['logo_1_encabezado'] !=null ){
            $quienessomos->logo_1_encabezado = $image['logo_1_encabezado'];
        }else{
            $quienessomos->logo_1_encabezado = null;
        }

        if($image['logo_2_encabezado'] !=null )
            $quienessomos->logo_2_encabezado = $image['logo_2_encabezado'];
        else
            $quienessomos->logo_2_encabezado = null;

        if($image['seccion1_imagen_fondo'] !=null )
            $quienessomos->seccion1_imagen_fondo = $image['seccion1_imagen_fondo'];
        else
            $quienessomos->seccion1_imagen_fondo = null;

        if($image['seccion2_imagen_fondo'] !=null )
            $quienessomos->seccion2_imagen_fondo = $image['seccion2_imagen_fondo'];
        else
            $quienessomos->seccion2_imagen_fondo = null;

        if($image['seccion4_imagen_fondo'] !=null )
            $quienessomos->seccion4_imagen_fondo = $image['seccion4_imagen_fondo'];
        else
            $quienessomos->seccion4_imagen_fondo = null;

         $quienessomos->save();
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
        $quienessomos->setTranslations('texto_encabezado', ['es' => $request['texto_encabezado'],'zh' =>$request['texto_encabezado_zh'] ] )
            ->setTranslations('seccio1_parrafo1', ['es' => $request['seccio1_parrafo1'],'zh' =>$request['seccio1_parrafo1_zh'] ] )
            ->setTranslations('seccio1_parrafo2', ['es' => $request['seccio1_parrafo2'],'zh' =>$request['seccio1_parrafo2_zh'] ])
            ->setTranslations('seccio1_parrafo3', ['es' => $request['seccio1_parrafo3'],'zh' =>$request['seccio1_parrafo3_zh'] ])
            ->setTranslations('seccio1_parrafo4', ['es' => $request['seccio1_parrafo4'],'zh' =>$request['seccio1_parrafo4_zh'] ])

            ->setTranslations('seccion2_titulo', ['es' => $request['seccion2_titulo'],'zh' =>$request['seccion2_titulo_zh'] ])
            ->setTranslations('seccion2_parrafo', ['es' => $request['seccion2_parrafo'],'zh' =>$request['seccion2_parrafo_zh'] ])

            ->setTranslations('seccion3_parrafo1', ['es' => $request['seccion3_parrafo1'],'zh' =>$request['seccion3_parrafo1_zh'] ])
            ->setTranslations('seccion3_parrafo2', ['es' => $request['seccion3_parrafo2'],'zh' =>$request['seccion3_parrafo2_zh'] ] )
            ->setTranslations('seccion4_parrafo1', ['es' => $request['seccion4_parrafo1'],'zh' =>$request['seccion4_parrafo1_zh'] ])
            ->setTranslations('seccion4_parrafo2', ['es' => $request['seccion4_parrafo2'],'zh' =>$request['seccion4_parrafo2_zh'] ])
            ->setTranslations('seccion4_parrafo3', ['es' => $request['seccion4_parrafo3'],'zh' =>$request['seccion4_parrafo3_zh'] ])
            ->setTranslations('seccion4_parrafo4', ['es' => $request['seccion4_parrafo4'],'zh' =>$request['seccion4_parrafo4_zh'] ]);

        $quienessomos->texto_encabezado_habilitado = $request['texto_encabezado_habilitado'];

        if($image['encabezado_imagen_fondo'] !=null ){
            $quienessomos->encabezado_imagen_fondo = $image['encabezado_imagen_fondo'];
        }/*else{
            $quienessomos->encabezado_imagen_fondo = null;
        }*/

        if($image['logo_1_encabezado'] !=null ){
            $quienessomos->logo_1_encabezado = $image['logo_1_encabezado'];
        }/*else{
            $quienessomos->logo_1_encabezado = null;
        }*/

        if($image['logo_2_encabezado'] !=null )
            $quienessomos->logo_2_encabezado = $image['logo_2_encabezado'];
        /*else
            $quienessomos->logo_2_encabezado = null;*/

        if($image['seccion1_imagen_fondo'] !=null )
            $quienessomos->seccion1_imagen_fondo = $image['seccion1_imagen_fondo'];
        /*else
            $quienessomos->seccion1_imagen_fondo = null;*/

        if($image['seccion2_imagen_fondo'] !=null )
            $quienessomos->seccion2_imagen_fondo = $image['seccion2_imagen_fondo'];
        /*else
            $quienessomos->seccion2_imagen_fondo = null;*/

        if($image['seccion4_imagen_fondo'] !=null )
            $quienessomos->seccion4_imagen_fondo = $image['seccion4_imagen_fondo'];
        /*else
            $quienessomos->seccion4_imagen_fondo = null;*/

        

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
