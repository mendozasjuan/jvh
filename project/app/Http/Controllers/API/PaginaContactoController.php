<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
Use App\PaginaContacto;
use App\Contacto;
class PaginaContactoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return PaginaContacto::with('sliders')->first();
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
            'ciudad1' => 'required',
            'direccion1' => 'required',
            'telefonos1' => 'required',
            'ciudad2' => 'required',
            'direccion2' => 'required',
            'telefonos2' => 'required',
            'contacto_titulo' => 'required',
            'contacto_descripcion' => 'required',
            'comercio_exterior' => 'required',
            'area_comercial' => 'required',
            'coordenadas1' => 'required',
            'coordenadas2' => 'required'

        ]);
    	$paginacontacto = new PaginaContacto;

        if($request['id'] != null){
            return $this->update($request,$request['id']);
        }

        $image = $this->storeImagenes($request);

        $paginacontacto->setTranslations('ciudad1', [
            'es' => $request['ciudad1'],
            'zh' =>$request['ciudad1_zh'],
            'en' =>$request['ciudad1_en']
        ] )
            ->setTranslations('direccion1', [
                'es' => $request['direccion1'],
                'zh' =>$request['direccion1_zh'],
                'en' =>$request['direccion1_en']
             ] )
            ->setTranslations('ciudad2', [
                'es' => $request['ciudad2'],
                'zh' =>$request['ciudad2_zh'],
                'en' =>$request['ciudad2_en']
            ] )
            ->setTranslations('direccion2', [
                'es' => $request['direccion2'],
                'zh' =>$request['direccion2_zh'],
                'en' =>$request['direccion2_en']
            ] )
            ->setTranslations('contacto_titulo', [
                'es' => $request['contacto_titulo'],
                'zh' =>$request['contacto_titulo_zh'],
                'en' =>$request['contacto_titulo_en']
            ] )
            ->setTranslations('contacto_descripcion', [
                'es' => $request['contacto_descripcion'],
                'zh' =>$request['contacto_descripcion_zh'],
                'en' =>$request['contacto_descripcion_en']
            ] );

            $paginacontacto->telefonos1 = $request['telefonos1'];
            $paginacontacto->telefonos2 = $request['telefonos2'];
            $paginacontacto->comercio_exterior = $request['comercio_exterior'];
            $paginacontacto->area_comercial = $request['area_comercial'];
            $paginacontacto->coordenadas1 = $request['coordenadas1'];
            $paginacontacto->coordenadas2 = $request['coordenadas2'];

        if($image['encabezado_imagen_fondo'] !=null )
            $paginacontacto->encabezado_imagen_fondo = $image['encabezado_imagen_fondo'];
        else
            $paginacontacto->encabezado_imagen_fondo = null;

        $paginacontacto->save();

        return $paginacontacto;
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

        $paginacontacto = PaginaContacto::findOrFail($id);
         $paginacontacto->setTranslations('ciudad1', [
            'es' => $request['ciudad1'],
            'zh' =>$request['ciudad1_zh'],
            'en' =>$request['ciudad1_en']
        ] )
            ->setTranslations('direccion1', [
                'es' => $request['direccion1'],
                'zh' =>$request['direccion1_zh'],
                'en' =>$request['direccion1_en']
             ] )
            ->setTranslations('ciudad2', [
                'es' => $request['ciudad2'],
                'zh' =>$request['ciudad2_zh'],
                'en' =>$request['ciudad2_en']
            ] )
            ->setTranslations('direccion2', [
                'es' => $request['direccion2'],
                'zh' =>$request['direccion2_zh'],
                'en' =>$request['direccion2_en']
            ] )
            ->setTranslations('contacto_titulo', [
                'es' => $request['contacto_titulo'],
                'zh' =>$request['contacto_titulo_zh'],
                'en' =>$request['contacto_titulo_en']
            ] )
            ->setTranslations('contacto_descripcion', [
                'es' => $request['contacto_descripcion'],
                'zh' =>$request['contacto_descripcion_zh'],
                'en' =>$request['contacto_descripcion_en']
            ] );

            $paginacontacto->telefonos1 = $request['telefonos1'];
            $paginacontacto->telefonos2 = $request['telefonos2'];
            $paginacontacto->comercio_exterior = $request['comercio_exterior'];
            $paginacontacto->area_comercial = $request['area_comercial'];
            $paginacontacto->coordenadas1 = $request['coordenadas1'];
            $paginacontacto->coordenadas2 = $request['coordenadas2'];

        if($image['encabezado_imagen_fondo'] !=null )
            $paginacontacto->encabezado_imagen_fondo = $image['encabezado_imagen_fondo'];

        $paginacontacto->update();
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

          return $image;
    }

    public function listContactos(){
        return Contacto::all();
    }

    public function deleteContacto($id){
         $contacto = Contacto::findOrFail($id);
        $contacto->delete();
        return response()->json([
         'message' => 'mensaje deleted successfully'
        ]);
    }
}
