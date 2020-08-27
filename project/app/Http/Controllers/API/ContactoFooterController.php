<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
Use App\ContactoFooter;

class ContactoFooterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return ContactoFooter::first();
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
            'ciudad1' => 'required',
            'direccion1' => 'required',
            'telefonos1' => 'required',
            'ciudad2' => 'required',
            'direccion2' => 'required',
            'telefonos2' => 'required',
            'contacto_titulo' => 'required',
            'comercio_exterior' => 'required',
            'area_comercial' => 'required'

        ]);

    	$contactoFooter = new ContactoFooter;

        if($request['id'] != null){
            return $this->update($request,$request['id']);
        }

        $contactoFooter->setTranslations('ciudad1', [
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
             ]);

            $contactoFooter->telefonos1 = $request['telefonos1'];
            $contactoFooter->telefonos2 = $request['telefonos2'];
            $contactoFooter->comercio_exterior = $request['comercio_exterior'];
            $contactoFooter->area_comercial = $request['area_comercial'];

        $contactoFooter->save();

        return $contactoFooter;
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


        $contactoFooter = ContactoFooter::findOrFail($id);
         $contactoFooter->setTranslations('ciudad1', [
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
             ]);

            $contactoFooter->telefonos1 = $request['telefonos1'];
            $contactoFooter->telefonos2 = $request['telefonos2'];
            $contactoFooter->comercio_exterior = $request['comercio_exterior'];
            $contactoFooter->area_comercial = $request['area_comercial'];

        

        $contactoFooter->update();
        return $contactoFooter;
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

}
