<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\PackagingCorte;

class PackagingCorteController extends Controller
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
    public function savePackaging(Request $request){
        if($request->file('packagingproducto')){
            $packagingproducto = $request->file('packagingproducto')->store('img/packaging','public');
            $packagingCorte = PackagingCorte::create([
                'packaging' => $packagingproducto,
                'corte_id' => $request['corteid']
            ]);

            return $packagingCorte;
        }

    }

    public function updatePackaging(Request $request,$id){
        $packaging = PackagingCorte::find($id);
        $packagingOld = $packaging->packaging;

        if($request->file('packagingproducto')){
            $packagingNew = $request->file('packagingproducto')->store('img/packaging','public');
            $packaging->packaging = $packagingNew;
            $packaging->update();

            $exists = Storage::disk('public')->exists($packagingOld);

            if($exists){
                Storage::disk('public')->delete($packagingOld);
            }

            return $packaging;
        }

    }

    public function deletePackaging($id){
        $packaging = PackagingCorte::find($id);
        
        $exists = Storage::disk('public')->exists($packaging->packaging);

        if($exists){
            Storage::disk('public')->delete($packaging->packaging);
        }

        $packaging->delete();

        return response()->json([
         'message' => 'packaging borrado con exito'
        ]);
    }

    public function allPackagingsProducto($corteid){
        $packagings = PackagingCorte::where('corte_id',$corteid)->get();
        return $packagings;

    }
}
