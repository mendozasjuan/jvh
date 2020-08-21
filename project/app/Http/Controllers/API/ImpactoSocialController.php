<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
Use App\ImpactoSocial;

class ImpactoSocialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return ImpactoSocial::first();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    	$impactosocial = new ImpactoSocial;

        if($request['id'] != null){
            return $this->update($request,$request['id']);
        }

        $image = $this->storeImagenes($request);

        $impactosocial->setTranslations('texto_encabezado', ['es' => $request['texto_encabezado'],'zh' =>$request['texto_encabezado_zh'] ] )
            ->setTranslations('seccion1_titulo', ['es' => $request['seccion1_titulo'],'zh' =>$request['seccion1_titulo_zh'] ] )
            ->setTranslations('seccion1_parrafo1', ['es' => $request['seccion1_parrafo1'],'zh' =>$request['seccion1_parrafo1_zh'] ])
            ->setTranslations('seccion1_parrafo2', ['es' => $request['seccion1_parrafo2'],'zh' =>$request['seccion1_parrafo2_zh'] ] )
            ->setTranslations('seccion2_titulo', ['es' => $request['seccion2_titulo'],'zh' =>$request['seccion2_titulo_zh'] ]);


            $impactosocial->texto_encabezado_habilitado = $request['texto_encabezado_habilitado'];

        if($image['encabezado_imagen_fondo'] !=null )
            $impactosocial->encabezado_imagen_fondo = $image['encabezado_imagen_fondo'];
        else
            $impactosocial->encabezado_imagen_fondo = null;
        

        if($image['logo_1_encabezado'] !=null )
            $impactosocial->logo_1_encabezado = $image['logo_1_encabezado'];
        else
            $impactosocial->logo_1_encabezado = null;
        

        if($image['logo_2_encabezado'] !=null )
            $impactosocial->logo_2_encabezado = $image['logo_2_encabezado'];
        else
            $impactosocial->logo_2_encabezado = null;


        if($image['seccion2_imagen_fondo'] !=null )
            $impactosocial->seccion2_imagen_fondo = $image['seccion2_imagen_fondo'];
        else
            $impactosocial->seccion2_imagen_fondo = null;
        

        $impactosocial->save();

        return $impactosocial;
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

        $impactosocial = ImpactoSocial::findOrFail($id);

        $impactosocial->setTranslations('texto_encabezado', ['es' => $request['texto_encabezado'],'zh' =>$request['texto_encabezado_zh'] ] )
            ->setTranslations('seccion1_titulo', ['es' => $request['seccion1_titulo'],'zh' =>$request['seccion1_titulo_zh'] ] )
            ->setTranslations('seccion1_parrafo1', ['es' => $request['seccion1_parrafo1'],'zh' =>$request['seccion1_parrafo1_zh'] ])
            ->setTranslations('seccion1_parrafo2', ['es' => $request['seccion1_parrafo2'],'zh' =>$request['seccion1_parrafo2_zh'] ] )
            ->setTranslations('seccion2_titulo', ['es' => $request['seccion2_titulo'],'zh' =>$request['seccion2_titulo_zh'] ]);


            $impactosocial->texto_encabezado_habilitado = $request['texto_encabezado_habilitado'];

        
        if($image['encabezado_imagen_fondo'] !=null )
            $impactosocial->encabezado_imagen_fondo = $image['encabezado_imagen_fondo'];

        if($image['logo_1_encabezado'] !=null )
            $impactosocial->logo_1_encabezado = $image['logo_1_encabezado'];

        if($image['logo_2_encabezado'] !=null )
            $impactosocial->logo_2_encabezado = $image['logo_2_encabezado'];


        if($image['seccion2_imagen_fondo'] !=null )
            $impactosocial->seccion2_imagen_fondo = $image['seccion2_imagen_fondo'];

  

        $impactosocial->update();
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
