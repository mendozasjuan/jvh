<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\ImagenCorte;
class ImagenCorteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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

    public function saveImage(Request $request){
        if($request->file('imageproducto')){
            $imageProducto = $request->file('imageproducto')->store('img/producto','public');
            $imagencorte = ImagenCorte::create([
                'imagen' => $imageProducto,
                'corte_id' => $request['corteid']
            ]);

            return $imagencorte;
        }

    }

    public function updateImage(Request $request,$id){
        $imagen = ImagenCorte::find($id);
        $imageOld = $imagen->imagen;

        if($request->file('imageproducto')){
            $imageNew = $request->file('imageproducto')->store('img/producto','public');
            $imagen->imagen = $imageNew;
            $imagen->update();

            $exists = Storage::disk('public')->exists($imageOld);

            if($exists){
                Storage::disk('public')->delete($imageOld);
            }

            return $imagen;
        }

    }

    public function deleteImage($id){
        $imagen = ImagenCorte::find($id);
        
        $exists = Storage::disk('public')->exists($imagen->imagen);

        if($exists){
            Storage::disk('public')->delete($imagen->imagen);
        }

        $imagen->delete();

        return response()->json([
         'message' => 'imagen borrada con exito'
        ]);
    }

    public function allImagesProducto($corteid){
        $imagencorte = ImagenCorte::where('corte_id',$corteid)->get();
        return $imagencorte;

    }
}
