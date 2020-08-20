<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\QuienesSomos;

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
        //dd($quienessomos);
        return view('web.quienessomos')->with('quienessomos', $quienessomos);
    }
}