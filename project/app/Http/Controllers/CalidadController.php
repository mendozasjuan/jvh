<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Calidad;

class CalidadController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $calidad = Calidad::first();
        return view('web.calidad')->with('calidad', $calidad);
    }
}