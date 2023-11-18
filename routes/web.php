<?php

use App\Http\Controllers\ClasificacioneController;
use App\Http\Controllers\ContratoController;
use App\Http\Controllers\DesarrolladoreController;
use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\GeneroController;
use App\Http\Controllers\PlataformaController;
use App\Http\Controllers\TiendaController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\VentaController;
use App\Http\Controllers\VideojuegoController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('empresas',EmpresaController::class);
Route::resource('desarrolladores',DesarrolladoreController::class);
Route::resource('contratos',ContratoController::class);
Route::resource('videojuegos',VideojuegoController::class);
Route::resource('plataformas',PlataformaController::class);
Route::resource('clasificaciones',ClasificacioneController::class);
Route::resource('generos',GeneroController::class);
Route::resource('ventas',VentaController::class);
Route::resource('tiendas',TiendaController::class);
Route::resource('usuarios',UsuarioController::class);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
