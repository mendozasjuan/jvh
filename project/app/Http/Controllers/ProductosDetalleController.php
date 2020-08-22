<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Corte;
use App\CategoriaCorte;
use App\PaginaProductos;

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
        $img_fondo = PaginaProductos::first()->encabezado_imagen_fondo;
       return view('web.productosdetalle')->with(
            [
                'producto' => $corte,
                'categorias' => $categoriascorte,
                'img_fondo' => $img_fondo,
            ]);
    }
}