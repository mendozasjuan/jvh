<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\SliderExportacion;

class SliderExportacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return SliderExportacion::where('exportacion_id',$request['p']);
    }

    public function getAll($pagina_id){
      return SliderExportacion::where('exportacion_id',$pagina_id)->get();
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
            'imagen' => 'required',
            'titulo' => 'required',
            'texto' => 'required',
            'orden' => 'required',
        ]);*/


        if($request['id'] != null){
            return $this->update($request,$request['id']);
        }

        $sliderExportacion = new SliderExportacion;

        $image = $this->storeImagenes($request);


          $sliderExportacion->setTranslations('titulo', ['es' => $request['titulo'],'zh' =>$request['titulo_zh'] ] )
            ->setTranslations('texto', ['es' => $request['texto'],'zh' =>$request['texto_zh'] ] );

        $sliderExportacion->orden = $request['orden'];

        $sliderExportacion->exportacion_id = $request['exportacion_id'];


        if($image['imagen'] !=null )
            $sliderExportacion->imagen = $image['imagen'];


        $sliderExportacion->save();

        return $sliderExportacion;
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

        $sliderExportacion = SliderExportacion::findOrFail($id);
        $sliderExportacion->setTranslations('titulo', ['es' => $request['titulo'],'zh' =>$request['titulo_zh'] ] )
             ->setTranslations('texto', ['es' => $request['texto'],'zh' =>$request['texto_zh'] ] );

        $sliderExportacion->orden = $request['orden'];

        $sliderExportacion->exportacion_id = $request['exportacion_id'];


        if($image['imagen'] !=null )
            $sliderExportacion->imagen = $image['imagen'];

        $sliderExportacion->update();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $slider = SliderExportacion::findOrFail($id);
        $slider->delete();
        return response()->json([
         'message' => 'slider deleted successfully'
        ]);
    }

    public function storeImagenes($request)
    {
        if ($request->file('imagen')==null)
          {
            $image['imagen'] = null;
          }
          else
          {
            $image['imagen'] = $request->file('imagen')->store('img','public');
            // almacena y captura el nombre del archivo
            //$encabezado_imagen_fondo =  $image['encabezado_imagen_fondo']->store('img','public');
          }

          return $image;
    }

}
