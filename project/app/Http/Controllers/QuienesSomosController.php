<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\QuienesSomos;
use App\ContactoFooter;
Use App\RedesSociales;
Use App\Logo;

class QuienesSomosController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $quienessomos = QuienesSomos::first();
        $footer = ContactoFooter::first();
        $redessociales = RedesSociales::first();
        $logo = Logo::first();
        //dd($quienessomos);
        return view('web.quienessomos')->with(
            [
                'quienessomos' => $quienessomos,
                'footer' => $footer,
                'redessociales' => $redessociales,
                'logo' => $logo
            ]);
    }
}