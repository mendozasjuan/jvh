<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('web.index');
});

Route::get('quienessomos', function () {
    return view('web.quienessomos');
});

Route::get('produccion', function () {
    return view('web.produccion');
});

Route::get('exportacion', function () {
    return view('web.exportacion');
});

Route::get('productos', function () {
    return view('web.productos');
});

Route::get('calidad', function () {
    return view('web.calidad');
});

Route::get('impactosocial', function () {
    return view('web.impactosocial');
});

Route::get('recursoshumanos', function () {
    return view('web.recursoshumanos');
});

Route::get('contacto', function () {
    return view('web.contacto');
});

Route::prefix('admin')->group(function() {
  Auth::routes();
});

Route::get('/home', 'HomeController@index')->name('home');


