<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PaginaRecursosHumanos;
use Illuminate\Support\Facades\Storage;
use App\RecursosHumanos;
use Carbon\Carbon;
use App\Nacionalidad;
use App\Http\Requests\RecursosHumanosCreateRequest;
use App\ContactoFooter;
Use App\RedesSociales;
Use App\Logo;

class PaginaRecursosHumanosController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $recursoshumanos = PaginaRecursosHumanos::first();
        $paises = Nacionalidad::all();
        $footer = ContactoFooter::first();
        $redessociales = RedesSociales::first();
        $logo = Logo::first();
        return view('web.recursoshumanos')->with([
            'recursoshumanos' => $recursoshumanos,
            'paises' => $paises,
            'footer' => $footer,
            'redessociales' => $redessociales,
            'logo' => $logo,
        ]);
    }

    public function saveForm(RecursosHumanosCreateRequest $request){

        $fecha = $request['dia'] . '-' .$request['mes'] . '-' . $request['ano'];
        
        if($request->file('foto'))
            $foto = $request->file('foto')->store('doc','public');
        else
            $foto = null;

        if($request->file('curriculum'))
            $curriculum = $request->file('curriculum')->store('doc','public');
        else
            $curriculum = null;


        
        $recursoshumanos = RecursosHumanos::Create([
            'nombre' => $request['nombre'],
            'apellido' => $request['apellido'],
            'telefono' => $request['telefono'],
            'email' => $request['email'],
            'pais' => $request['pais'],
            'nacionalidad' => $request['nacionalidad'],
            'dni' => $request['dni'],
            'fecha_nacimiento' => Carbon::createFromFormat('d-m-Y',$fecha),
            'foto' => $foto,
            'curriculum' => $curriculum,

        ]);

        //return $recursoshumanos;
        return redirect()->route('recursoshumanos');
    }

    public function getNacionalidadFromPais($paisid){
        $pais = Nacionalidad::find($paisid);
        return $pais;
    }
}