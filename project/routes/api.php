<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

	
Route::apiResources(['user' => 'API\UserController']);
Route::apiResources(['categorias-corte' => 'API\CategoriaCorteController']);
Route::apiResources(['corte' => 'API\CorteController']);
Route::apiResources(['inicio' => 'API\InicioController']);
Route::apiResources(['quienessomos' => 'API\QuienesSomosController']);
Route::apiResources(['produccion' => 'API\ProduccionController']);
Route::apiResources(['exportacion' => 'API\ExportacionController']);
Route::apiResources(['calidad' => 'API\CalidadController']);
Route::apiResources(['impactosocial' => 'API\ImpactoSocialController']);
Route::apiResources(['paginaproductos' => 'API\PaginaProductosController']);
Route::apiResources(['paginarecursoshumanos' => 'API\PaginaRecursosHumanosController']);
Route::apiResources(['paginacontacto' => 'API\PaginaContactoController']);
Route::get('storage/{filename}', 'InicioController@images');
