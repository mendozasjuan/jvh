<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Inicio;

class InicioController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $inicio = Inicio::first();
        return view('web.index')->with('inicio', $inicio);
    }
}
