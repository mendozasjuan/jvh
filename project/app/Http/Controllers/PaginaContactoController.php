<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PaginaContacto;
use App\Http\Requests\ContactoCreateRequest;
use App\Contacto;

class PaginaContactoController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $contacto = PaginaContacto::first();
        return view('web.contacto')->with('contacto', $contacto);
    }

    public function saveForm(ContactoCreateRequest $request){

        $contacto = Contacto::Create([
            'nombre' => $request['nombre'],
            'apellido' => $request['apellido'],
            'correo' => $request['correo'],
            'telefono' => $request['telefono'],
            'mensaje' =>  $request['mensaje'],
        ]);

        return redirect()->route('contacto');

    }
}