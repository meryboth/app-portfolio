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

/* Ruta perfil del usuario */
Route::get('/perfil', [App\Http\Controllers\PortafolioController::class, 'index']);

Auth::routes();

/* Ruta agregar proyectos */
Route::resource('/proyectos', App\Http\Controllers\ProyectoController::class);
/* Ruta dashboard del usuario al loguearse */
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

/* Ruta del landing page */
Route::get('/', function () {
    return view('index');
})->name('landing');

/* Ruta Coleccion */
Route::get('/coleccion', function () {
    return view('coleccion');
})->name('coleccion');

/* Ruta Nosotros */
Route::get('/nosotros', function () {
    return view('nosotros');
})->name('nosotros');

/* Ruta Contacto */
Route::get('/contacto', function () {
    return view('contacto');
})->name('contacto');

