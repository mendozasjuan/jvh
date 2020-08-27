<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ImpactoSocial;
use App\ContactoFooter;
Use App\RedesSociales;
Use App\Logo;

class ImpactoSocialController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $impactosocial = ImpactoSocial::first();
        $footer = ContactoFooter::first();
        $redessociales = RedesSociales::first();
        $logo = Logo::first();
        $carousel = $impactosocial->sliders->pluck('imagen')->all();
        return view('web.impactosocial')->with(
            [
                'impactosocial' => $impactosocial,
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