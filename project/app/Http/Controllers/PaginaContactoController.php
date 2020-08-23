<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PaginaContacto;
use App\Http\Requests\ContactoCreateRequest;
use App\Contacto;
use App\ContactoFooter;
Use App\RedesSociales;
Use App\Logo;

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
        $footer = ContactoFooter::first();
        $redessociales = RedesSociales::first();
        $logo = Logo::first();
        return view('web.contacto')->with(
            [
                'contacto' => $contacto,
                'footer' => $footer,
                'redessociales' => $redessociales,
                'logo' => $logo,
            ]
        );
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