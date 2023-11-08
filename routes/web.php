<?php

/*use App\Http\Controllers\ControladorWebHome;*/
use App\Http\Controllers\ControladorWebHome;
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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', 'App\\Http\\Controllers\\ControladorWebHome@index');
Route::get('/recetas', 'App\\Http\\Controllers\\ControladorWebRecetas@index');
Route::get('/receta/{id}', 'App\\Http\\Controllers\\ControladorWebVistaRecetas@index');
Route::post('/recetas', 'App\\Http\\Controllers\\ControladorWebRecetas@buscar');


Route::get('/guias', 'App\\Http\\Controllers\\ControladorWebCompras@index');
Route::post('/guias', 'App\\Http\\Controllers\\ControladorWebCompras@otras');
Route::get('/guia/{id}', 'App\\Http\\Controllers\\ControladorWebVistaGuia@index');


Route::get('/sistema/login', 'App\\Http\\Controllers\\login@Index');
Route::post('/sistema/login', 'App\\Http\\Controllers\\login@validar');
Route::get('/sistema/home', 'App\\Http\\Controllers\\home@index');


Route::get('/sistema/recetas', 'App\\Http\\Controllers\\recetas@index');
Route::post('/sistema/recetas', 'App\\Http\\Controllers\\recetas@busqueda_np');

Route::get('/sistema/nueva', 'App\\Http\\Controllers\\nuevaReceta@index');
Route::get('/sistema/nueva/{id}', 'App\\Http\\Controllers\\nuevaReceta@update');

Route::post('/sistema/nueva', 'App\\Http\\Controllers\\nuevaReceta@guardar');
Route::post('/sistema/nueva/{id}', 'App\\Http\\Controllers\\nuevaReceta@actualizar');
Route::get('/sistema/recetas/{id}', 'App\\Http\\Controllers\\nuevaReceta@eliminar');




Route::get('/sistema/categorias', 'App\\Http\\Controllers\\categorias@index');
Route::get('/sistema/categorias/{id}', 'App\\Http\\Controllers\\categorias@delete');
Route::get('/sistema/categorias/nueva/{id}', 'App\\Http\\Controllers\\categorias@update');
Route::post('/sistema/categorias/nueva/{id}', 'App\\Http\\Controllers\\categorias@actualizar');
Route::get('/sistema/categoria/nueva', 'App\\Http\\Controllers\\categorias@nueva');
Route::post('/sistema/categoria/nueva', 'App\\Http\\Controllers\\categorias@guardar');

Route::get('/sistema/paises', 'App\\Http\\Controllers\\paises@index');
Route::get('/sistema/paises/{id}', 'App\\Http\\Controllers\\paises@delete');
Route::get('/sistema/pais/nuevo', 'App\\Http\\Controllers\\paises@nueva');
Route::post('/sistema/pais/nuevo', 'App\\Http\\Controllers\\paises@guardar');
Route::get('/sistema/pais/nuevo/{id}', 'App\\Http\\Controllers\\paises@update');
Route::post('/sistema/pais/nuevo/{id}', 'App\\Http\\Controllers\\paises@actualizar');

Route::get('/sistema/categoria/guia', 'App\\Http\\Controllers\\categoriaGuia@index');
Route::get('/sistema/categoria/guia/delete/{id}', 'App\\Http\\Controllers\\categoriaGuia@delete');
Route::get('/sistema/categoria/guia/nueva', 'App\\Http\\Controllers\\categoriaGuia@nuevo');
Route::post('/sistema/categoria/guia/nueva', 'App\\Http\\Controllers\\categoriaGuia@guardar');
Route::get('/sistema/categoria/guia/nueva/{id}', 'App\\Http\\Controllers\\categoriaGuia@update');
Route::post('/sistema/categoria/guia/nueva/{id}', 'App\\Http\\Controllers\\categoriaGuia@actualizar');

Route::get('/sistema/guias', 'App\\Http\\Controllers\\guia@index');
Route::post('/sistema/guias', 'App\\Http\\Controllers\\guia@busqueda_np');


Route::get('/sistema/guia/delete/{id}', 'App\\Http\\Controllers\\guia@eliminar');
Route::get('/sistema/guia/nueva', 'App\\Http\\Controllers\\guia@nueva');
Route::post('/sistema/guia/nueva', 'App\\Http\\Controllers\\guia@guardar');
Route::get('/sistema/guia/nueva/{id}', 'App\\Http\\Controllers\\guia@update');
Route::post('/sistema/guia/nueva/{id}', 'App\\Http\\Controllers\\guia@actualizar');


Route::get('/sistema/anuncios', 'App\\Http\\Controllers\\anuncios@index');


Route::get('/sistema/anuncio/nuevo', 'App\\Http\\Controllers\\anuncios@nuevo');

Route::get('/sistema/anuncio/delete/{id}', 'App\\Http\\Controllers\\anuncios@delete');

Route::post('/sistema/anuncio/nuevo', 'App\\Http\\Controllers\\anuncios@guardar');
Route::get('/sistema/anuncio/nuevo/{id}', 'App\\Http\\Controllers\\anuncios@update');
Route::post('/sistema/anuncio/nuevo/{id}', 'App\\Http\\Controllers\\anuncios@actualizar');


Route::get('/sistema/logout/', 'App\\Http\\Controllers\\login@salir');

