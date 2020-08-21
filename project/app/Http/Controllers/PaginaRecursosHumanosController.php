<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PaginaRecursosHumanos;

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
        return view('web.recursoshumanos')->with('recursoshumanos', $recursoshumanos);
    }
}