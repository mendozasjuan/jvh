<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Inicio;

class InicioController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $inicio = Inicio::first();
        return view('web.index')->with('inicio', $inicio);
    }

    public function images($filename)
    {
    	$path = storage_path() . '/public/' . $filename; // Podés poner cualquier ubicacion que quieras dentro del storage
        if(!File::exists($path)) abort(404); // Si el archivo no existe

        $file = File::get($path);
        $type = File::mimeType($path);

        $response = Response::make($file, 200);
        $response->header("Content-Type", $type);

        return $response;
    }
}
