<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produccion;
use App\ContactoFooter;
Use App\RedesSociales;
Use App\Logo;

class ProduccionController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $produccion = Produccion::first();
        $footer = ContactoFooter::first();
        $redessociales = RedesSociales::first();
        $logo = Logo::first();
        return view('web.produccion')->with(
            [
                'produccion' => $produccion,
                'footer' => $footer,
                'redessociales' => $redessociales,
                'logo' => $logo,
            ]);
    }
}