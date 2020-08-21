<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ImpactoSocial;

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
        return view('web.impactosocial')->with('impactosocial', $impactosocial);
    }
}