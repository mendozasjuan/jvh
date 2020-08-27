<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\CategoriaCorte;

class CategoriaCorteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return CategoriaCorte::paginate(10);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*/*$this->validate($request, [
            'categoria' => 'required'
        ]);*/

        $categoria = new CategoriaCorte;

         $categoria->setTranslations('categoria', [
            'es' => $request['categoria'],
            'zh' =>$request['categoria_zh'],
            'en' =>$request['categoria_en']
         ] );

         return $categoria->save();


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
        /*$this->validate($request, [
            'categoria' => 'required',
            'categoria_en' => 'required'
        ]);*/

        $categoria = CategoriaCorte::findOrFail($id);
        $categoria->setTranslations('categoria', [
            'es' => $request['categoria'],
            'zh' =>$request['categoria_zh'],
            'en' =>$request['categoria_en']
         ] );

        return $categoria->update();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $categoria = CategoriaCorte::findOrFail($id);
        $categoria->delete();
        return ['message'=>'User has deleted', 'data_user'=>$categoria];/*response()->json([
         'message' => 'Category deleted successfully'
        ]);*/
    }
}
