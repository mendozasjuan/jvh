<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
Use App\PaginaProductos;

class PaginaProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return PaginaProductos::with('sliders')->first();
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
            'seccion1_imagen' => 'required',
            'seccion1_imagen_fondo' => 'required',

        ]);
    	$paginaproductos = new PaginaProductos;

        if($request['id'] != null){
            return $this->update($request,$request['id']);
        }

        $image = $this->storeImagenes($request);

        $paginaproductos->setTranslations('seccion1_titulo', [
            'es' => $request['seccion1_titulo'],
            'zh' =>$request['seccion1_titulo_zh'],
            'en' =>$request['seccion1_titulo_en']
         ] );

        if($image['encabezado_imagen_fondo'] !=null )
            $paginaproductos->encabezado_imagen_fondo = $image['encabezado_imagen_fondo'];
        else
            $paginaproductos->encabezado_imagen_fondo = null;
        

        if($image['seccion1_imagen'] !=null )
            $paginaproductos->seccion1_imagen = $image['seccion1_imagen'];
        else
            $paginaproductos->seccion1_imagen = null;
        

        if($image['seccion1_imagen_fondo'] !=null )
            $paginaproductos->seccion1_imagen_fondo = $image['seccion1_imagen_fondo'];
        else
            $paginaproductos->seccion1_imagen_fondo = null;


        $paginaproductos->save();

        return $paginaproductos;
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

        $paginaproductos = PaginaProductos::findOrFail($id);
        $paginaproductos->setTranslations('seccion1_titulo', [
            'es' => $request['seccion1_titulo'],
            'zh' =>$request['seccion1_titulo_zh'],
            'en' =>$request['seccion1_titulo_en']
         ] );

        if($image['encabezado_imagen_fondo'] !=null )
            $paginaproductos->encabezado_imagen_fondo = $image['encabezado_imagen_fondo'];
        
        

        if($image['seccion1_imagen'] !=null )
            $paginaproductos->seccion1_imagen = $image['seccion1_imagen'];
               

        if($image['seccion1_imagen_fondo'] !=null )
            $paginaproductos->seccion1_imagen_fondo = $image['seccion1_imagen_fondo'];
        

        $paginaproductos->update();
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


          if ($request->file('seccion1_imagen')==null)
          {
            $image['seccion1_imagen'] = null;
          }
          else
          {
            $image['seccion1_imagen'] = $request->file('seccion1_imagen')->store('img','public');
          }

          if ($request->file('seccion1_imagen_fondo')==null)
          {
            $image['seccion1_imagen_fondo'] = null;
          }
          else
          {
            $image['seccion1_imagen_fondo'] = $request->file('seccion1_imagen_fondo')->store('img','public');
          }

          return $image;
    }
}
