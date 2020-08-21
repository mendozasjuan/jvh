<?php

use Illuminate\Support\Facades\Route;
use App\CategoriaCorte;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['middleware' => ['web']], function () {

    Route::get('lang/{lang}', function ($lang) {
            session(['lang' => $lang]);
            return \Redirect::back();
        })->where([
            'lang' => 'es|zh'
    ]);

    Route::get('/','InicioController@index')->name('inicio');
    Route::get('/quienessomos','QuienesSomosController@index')->name('quienessomos');
    Route::get('/produccion','ProduccionController@index')->name('produccion');
        


    /*Route::get('/quienessomos', function () {
        return view('web.quienessomos');
    })->name('quienessomos');*/

    /*Route::get('produccion', function () {
        return view('web.produccion');
    })->name('produccion');*/

    Route::get('exportacion', function () {
        return view('web.exportacion');
    });

    Route::get('productos', function () {
        return view('web.productos');
    })->name('productos');

    Route::get('calidad', function () {
        return view('web.calidad');
    });

    Route::get('impactosocial', function () {
        return view('web.impactosocial');
    })->name('impactosocial');

    Route::get('recursoshumanos', function () {
        return view('web.recursoshumanos');
    })->name('recursoshumanos');

    Route::get('contacto', function () {
        return view('web.contacto');
    })->name('contacto');

    Route::get('productosdetalle',function(){
        return view('web.productosdetalle');
    })->name('productosdetalle');
    
    Route::prefix('admin')->group(function() {
      Auth::routes();
      Route::get('/home', 'HomeController@index')->name('home');
      Route::get('/', 'HomeController@index');
    });

    Route::get('/storage/{filename}', 'InicioController@images');
});







