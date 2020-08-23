<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Corte;
use App\ContactoFooter;
Use App\RedesSociales;
Use App\Logo;

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
        $footer = ContactoFooter::first();
        $redessociales = RedesSociales::first();
        $logo = Logo::first();
        return view('web.productos')->with(
            [
                'productos' => $productos,
                'footer' => $footer,
                'redessociales' => $redessociales,
                'logo' => $logo,
            ]
        );
    }
}