<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PaginaProductos;
use App\CategoriaCorte;
use App\ContactoFooter;
Use App\RedesSociales;
Use App\Logo;

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
        $footer = ContactoFooter::first();
        $redessociales = RedesSociales::first();
        $logo = Logo::first();
        $carousel = $productos->sliders->pluck('imagen')->all();
        return view('web.productos')->with(
            [
                'productos' => $productos,
                'categorias' => $categoriascorte,
                'footer' => $footer,
                'redessociales' => $redessociales,
                'logo' => $logo,
                'carousel' => [
                    'alto' => '300px',
                    'imagenes' => $carousel
                ]
            ]);
    }
}