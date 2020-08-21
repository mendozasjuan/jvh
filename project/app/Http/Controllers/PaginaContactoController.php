<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PaginaContacto;

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
}