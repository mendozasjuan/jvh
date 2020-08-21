<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exportacion;

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
        return view('web.exportacion')->with('exportacion', $exportacion);
    }
}