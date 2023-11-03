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
Route::get('/vista', 'App\\Http\\Controllers\\ControladorWebVistaRecetas@index');
Route::get('/compras', 'App\\Http\\Controllers\\ControladorWebCompras@index');
Route::get('/vistaGuia', 'App\\Http\\Controllers\\ControladorWebVistaGuia@Index');


Route::get('/sistema/login', 'App\\Http\\Controllers\\login@Index');
Route::post('/sistema/login', 'App\\Http\\Controllers\\login@validar');
Route::get('/sistema/home', 'App\\Http\\Controllers\\home@index');


Route::get('/sistema/recetas', 'App\\Http\\Controllers\\recetas@index');

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