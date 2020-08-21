<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Corte;

class CorteController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $cortes = Corte::with('categoria')->paginate();
        return view('web.productos')->with('productos', $productos);
    }
}