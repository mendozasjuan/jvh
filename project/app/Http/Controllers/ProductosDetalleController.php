<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Corte;
use App\CategoriaCorte;

class ProductosDetalleController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $productos = Corte::first();
        $categoriascorte=CategoriaCorte::all();
        return view('web.productos')->with(
            [
                'productos' => $productos,
                'categorias' => $categoriascorte
            ]);
    }


    public function detalle($id)
    {
        $corte = Corte::find($id);
        $categoriascorte=CategoriaCorte::all();
       return view('web.productosdetalle')->with(
            [
                'producto' => $corte,
                'categorias' => $categoriascorte
            ]);
    }
}