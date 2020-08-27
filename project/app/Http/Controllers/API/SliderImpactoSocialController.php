<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\SliderImpactoSocial;

class SliderImpactoSocialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return SliderImpactoSocial::where('impacto_social_id',$request['p']);
    }

    public function getAll($pagina_id){
      return SliderImpactoSocial::where('impacto_social_id',$pagina_id)->get();
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

        $sliderImpactoSocial = new SliderImpactoSocial;

        $image = $this->storeImagenes($request);


          $sliderImpactoSocial->setTranslations('titulo', ['es' => $request['titulo'],'zh' =>$request['titulo_zh'] ] )
            ->setTranslations('texto', ['es' => $request['texto'],'zh' =>$request['texto_zh'] ] );

        $sliderImpactoSocial->orden = $request['orden'];

        $sliderImpactoSocial->impacto_social_id = $request['impacto_social_id'];


        if($image['imagen'] !=null )
            $sliderImpactoSocial->imagen = $image['imagen'];


        $sliderImpactoSocial->save();

        return $sliderImpactoSocial;
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

        $sliderImpactoSocial = SliderImpactoSocial::findOrFail($id);
        $sliderImpactoSocial->setTranslations('titulo', ['es' => $request['titulo'],'zh' =>$request['titulo_zh'] ] )
             ->setTranslations('texto', ['es' => $request['texto'],'zh' =>$request['texto_zh'] ] );

        $sliderImpactoSocial->orden = $request['orden'];

        $sliderImpactoSocial->impacto_social_id = $request['impacto_social_id'];


        if($image['imagen'] !=null )
            $sliderImpactoSocial->imagen = $image['imagen'];

        $sliderImpactoSocial->update();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $slider = SliderImpactoSocial::findOrFail($id);
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
