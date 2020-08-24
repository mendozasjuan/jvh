<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
Use App\RedesSociales;

class RedesSocialesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return RedesSociales::first();
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
            'linkedin' => 'required',
            'instagram' => 'required',
            'facebook' => 'required',
            'youtube' => 'required',

        ]);

        if($request['id'] != null){
            return $this->update($request,$request['id']);
        }


        $redesSociales = RedesSociales::Create([
            'linkedin' =>  $request['linkedin'],
            'instagram' => $request['instagram'], 
            'facebook' => $request['facebook'], 
            'youtube' =>  $request['youtube'],
        ]);


        return $redesSociales;
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
        $this->validate($request, [
            'linkedin' => 'required',
            'instagram' => 'required',
            'facebook' => 'required',
            'youtube' => 'required',

        ]);


        $redesSociales = RedesSociales::findOrFail($id);

            $redesSociales->linkedin = $request['linkedin'];
            $redesSociales->instagram = $request['instagram'];
            $redesSociales->facebook = $request['facebook'];
            $redesSociales->youtube = $request['youtube'];

        

        $redesSociales->update();
        return $redesSociales;
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
