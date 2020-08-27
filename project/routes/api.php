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
Route::apiResources(['contactofooter' => 'API\ContactoFooterController']);
Route::apiResources(['redessociales' => 'API\RedesSocialesController']);
Route::apiResources(['logo' => 'API\LogoController']);

Route::apiResources(['sliderinicio' => 'API\SliderInicioController']);
Route::apiResources(['sliderquienessomos' => 'API\SliderQuienesSomosController']);
Route::apiResources(['sliderproduccion' => 'API\SliderProduccionController']);
Route::apiResources(['sliderexportacion' => 'API\SliderExportacionController']);
Route::apiResources(['sliderproductos' => 'API\SliderProductosController']);
Route::apiResources(['slidercalidad' => 'API\SliderCalidadController']);
Route::apiResources(['sliderimpactosocial' => 'API\SliderImpactoSocialController']);
Route::apiResources(['sliderrecursoshumanos' => 'API\SliderRecursosHumanosController']);
Route::apiResources(['slidercontacto' => 'API\SliderContactoController']);

Route::post('saveimageproducto','API\ImagenCorteController@saveImage');
Route::get('allimagesproducto/{idproducto}','API\ImagenCorteController@allImagesProducto');
Route::post('updateimageproducto/{idimagen}','API\ImagenCorteController@updateImage');
Route::post('deleteimageproducto/{idimagen}','API\ImagenCorteController@deleteImage');

Route::post('saveetiquetadoproducto','API\EtiquetadoCorteController@saveEtiquetado');
Route::get('alletiquetadosproducto/{idproducto}','API\EtiquetadoCorteController@allEtiquetadosProducto');
Route::post('updateetiquetadoproducto/{idimagen}','API\EtiquetadoCorteController@updateEtiquetado');
Route::post('deleteetiquetadoproducto/{idimagen}','API\EtiquetadoCorteController@deleteEtiquetado');

Route::post('savepackagingproducto','API\PackagingCorteController@savePackaging');
Route::get('allpackagingsproducto/{idproducto}','API\PackagingCorteController@allPackagingsProducto');
Route::post('updatepackagingproducto/{idimagen}','API\PackagingCorteController@updatePackaging');
Route::post('deletepackagingproducto/{idimagen}','API\PackagingCorteController@deletePackaging');

Route::get('listcurriculums','API\PaginaRecursosHumanosController@listCurriculums');
Route::post('deletecurriculum/{id}','API\PaginaRecursosHumanosController@deleteCurriculum');

Route::get('listcontactos','API\PaginaContactoController@listContactos');
Route::post('deletecontacto/{id}','API\PaginaContactoController@deleteContacto');


Route::get('allsliderinicio/{pagina_inicio_id}','API\SliderInicioController@getAll');
Route::get('allsliderquienessomos/{quienes_somos_id}','API\SliderQuienesSomosController@getAll');
Route::get('allsliderproduccion/{produccion_id}','API\SliderProduccionController@getAll');
Route::get('allsliderexportacion/{exportacion_id}','API\SliderExportacionController@getAll');
Route::get('allsliderproductos/{pagina_productos_id}','API\SliderProductosController@getAll');
Route::get('allslidercalidad/{calidad_id}','API\SliderCalidadController@getAll');
Route::get('allsliderimpactosocial/{impacto_social_id}','API\SliderImpactoSocialController@getAll');
Route::get('allsliderrecursoshumanos/{pagina_recursos_humanos_id}','API\SliderRecursosHumanosController@getAll');
Route::get('allslidercontacto/{pagina_contacto_id}','API\SliderContactoController@getAll');


Route::get('storage/{filename}', 'InicioController@images');
