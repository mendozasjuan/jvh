<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Corte;
use App\CategoriaCorte;
use App\PaginaProductos;
use App\ContactoFooter;
Use App\RedesSociales;
Use App\Logo;

class ProductosDetalleController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $productos = PaginaProductos::first();
        $cortes = Corte::first();
        $categoriascorte=CategoriaCorte::all();
        $footer = ContactoFooter::first();
        $redessociales = RedesSociales::first();
        $logo = Logo::first();
        $carousel = $productos->sliders->pluck('imagen')->all();
        return view('web.productos')->with(
            [
                'productos' => $cortes,
                'categorias' => $categoriascorte,
                'footer' => $footer,
                'logo' => $logo,
                'carousel' => [
                    'alto' => '300px',
                    'imagenes' => $carousel
                ]
            ]);
    }


    public function detalle($id)
    {
        $productos = PaginaProductos::first();
        $corte = Corte::find($id);
        $categoriascorte=CategoriaCorte::all();
        $img_fondo = $productos->encabezado_imagen_fondo;
        $footer = ContactoFooter::first();
        $redessociales = RedesSociales::first();
        $logo = Logo::first();
        $carousel = $productos->sliders->pluck('imagen')->all();
       return view('web.productosdetalle')->with(
            [
                'producto' => $corte,
                'categorias' => $categoriascorte,
                'img_fondo' => $img_fondo,
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