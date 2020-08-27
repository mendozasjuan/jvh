<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Inicio;
Use App\ContactoFooter;
Use App\RedesSociales;
Use App\Logo;

class InicioController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $inicio = Inicio::with('sliders')->first();
        $footer = ContactoFooter::first();
        $redessociales = RedesSociales::first();
        $logo = Logo::first();
        $carousel = $inicio->sliders->pluck('imagen')->all();
        return view('web.index')->with(
            [
                'inicio' => $inicio,
                'footer' => $footer,
                'redessociales' => $redessociales,
                'logo' => $logo,
                'carousel' => [
                    'alto' => '600px',
                    'imagenes' => $carousel
                ]
            ]
        );
    }
}
