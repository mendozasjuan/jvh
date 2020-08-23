<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exportacion;
use App\ContactoFooter;
Use App\RedesSociales;
Use App\Logo;

class ExportacionController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $exportacion = Exportacion::first();
        $footer = ContactoFooter::first();
        $redessociales = RedesSociales::first();
        $logo = Logo::first();
        return view('web.exportacion')->with(
            [
                'exportacion' => $exportacion,
                'footer' => $footer,
                'redessociales' => $redessociales,
                'logo' => $logo,
            ]
        );
    }
}