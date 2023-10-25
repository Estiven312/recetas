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
Route::get('/Recetas', 'App\\Http\\Controllers\\ControladorWebRecetas@index');
Route::get('/vista', 'App\\Http\\Controllers\\ControladorWebVistaRecetas@index');
Route::get('/compras', 'App\\Http\\Controllers\\ControladorWebCompras@index');
