<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\VentaController;
use App\Http\Controllers\ClienteController;

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

Route::middleware(['guest'])->get('/', function () {
    return view('auth.login');
})->name('login');

Route::get('producto/pdf', [App\Http\Controllers\ProductoController::class, 'pdf'])->name('producto.pdf');

Auth::routes(['register'=>false, 'reset'=>false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('producto',ProductoController::class)->middleware('auth');
Route::resource('empleado',EmpleadoController::class)->middleware('auth');
Route::resource('ventas',VentaController::class)->middleware('auth');
Route::resource('cliente',ClienteController::class)->middleware('auth');

Route::get('/descargar-arreglo', [ProductoController::class, 'exportJson']);


