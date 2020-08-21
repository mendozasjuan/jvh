<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produccion;

class ProduccionController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $produccion = Produccion::first();
        return view('web.produccion')->with('produccion', $produccion);
    }
}