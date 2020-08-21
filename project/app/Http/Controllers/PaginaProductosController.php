<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PaginaProductos;
use App\CategoriaCorte;

class PaginaProductosController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $productos = PaginaProductos::first();
        $categoriascorte=CategoriaCorte::all();
        return view('web.productos')->with(
            [
                'productos' => $productos,
                'categorias' => $categoriascorte
            ]);
    }
}