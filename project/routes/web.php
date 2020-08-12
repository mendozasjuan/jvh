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
    return view('index');
});
Route::get('quienessomos', function () {
    return view('quienessomos');
});
Route::get('produccion', function () {
    return view('produccion');
});

Route::prefix('admin')->group(function() {
  Auth::routes();
});

Route::get('/home', 'HomeController@index')->name('home');
