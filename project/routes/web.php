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
            'lang' => 'es|zh|en'
    ]);

    Route::get('/','InicioController@index')->name('inicio');
    Route::get('/quienessomos','QuienesSomosController@index')->name('quienessomos');
    Route::get('/produccion','ProduccionController@index')->name('produccion');
    Route::get('/exportacion','ExportacionController@index')->name('exportacion');
    Route::get('/calidad','CalidadController@index')->name('calidad');
    Route::get('/impactosocial','ImpactoSocialController@index')->name('impactosocial');
    Route::get('/productos','PaginaProductosController@index')->name('productos');
    Route::get('/recursoshumanos','PaginaRecursosHumanosController@index')->name('recursoshumanos');
    Route::get('/contacto','PaginaContactoController@index')->name('contacto');
    Route::get('/productosdetalle/{id}','ProductosDetalleController@detalle')->name('productosdetalle');
    Route::post('/recursoshumanos','PaginaRecursosHumanosController@saveForm')->name('recursoshumanosform');
    Route::get('/getnacionalidad/{id}','PaginaRecursosHumanosController@getNacionalidadFromPais')->name('getnacionalidad');
    Route::post('/contacto','PaginaContactoController@saveForm')->name('contactoform');
    
    Route::prefix('admin')->group(function() {
      Auth::routes();
      Route::get('/', 'HomeController@index')->name('home');;
    });

    Route::get('/storage/{filename}', 'InicioController@images');
});







