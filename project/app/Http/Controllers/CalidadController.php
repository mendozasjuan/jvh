<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Calidad;
use App\ContactoFooter;
Use App\RedesSociales;
Use App\Logo;

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
        $footer = ContactoFooter::first();
        $redessociales = RedesSociales::first();
        $logo = Logo::first();
        $carousel = $calidad->sliders->pluck('imagen')->all();
        return view('web.calidad')->with(
            [
                'calidad' => $calidad,
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