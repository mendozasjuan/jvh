<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\SliderRecursosHumanos;

class SliderRecursosHumanosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return SliderRecursosHumanos::where('pagina_recursos_humanos_id',$request['p']);
    }

    public function getAll($pagina_id){
      return SliderRecursosHumanos::where('pagina_recursos_humanos_id',$pagina_id)->get();
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

        $sliderRecursosHumanos = new SliderRecursosHumanos;

        $image = $this->storeImagenes($request);


          $sliderRecursosHumanos->setTranslations('titulo', ['es' => $request['titulo'],'zh' =>$request['titulo_zh'] ] )
            ->setTranslations('texto', ['es' => $request['texto'],'zh' =>$request['texto_zh'] ] );

        $sliderRecursosHumanos->orden = $request['orden'];

        $sliderRecursosHumanos->pagina_recursos_humanos_id = $request['pagina_recursos_humanos_id'];


        if($image['imagen'] !=null )
            $sliderRecursosHumanos->imagen = $image['imagen'];


        $sliderRecursosHumanos->save();

        return $sliderRecursosHumanos;
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

        $sliderRecursosHumanos = SliderRecursosHumanos::findOrFail($id);
        $sliderRecursosHumanos->setTranslations('titulo', ['es' => $request['titulo'],'zh' =>$request['titulo_zh'] ] )
             ->setTranslations('texto', ['es' => $request['texto'],'zh' =>$request['texto_zh'] ] );

        $sliderRecursosHumanos->orden = $request['orden'];

        $sliderRecursosHumanos->pagina_recursos_humanos_id = $request['pagina_recursos_humanos_id'];


        if($image['imagen'] !=null )
            $sliderRecursosHumanos->imagen = $image['imagen'];

        $sliderRecursosHumanos->update();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $slider = SliderRecursosHumanos::findOrFail($id);
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
