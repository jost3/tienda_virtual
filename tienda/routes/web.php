<?php

use Illuminate\Support\Facades\Auth;
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

Auth::routes();
Route::get('/products', function () {
    return view('layouts.prod');
});
Route::get('/products', [App\Http\Controllers\PortafolioController::class, 'index']);
Route::resource('clientes', App\Http\Controllers\ClienteController::class);
Route::resource('ventas', App\Http\Controllers\VentaController::class);
Route::resource('productos', App\Http\Controllers\ProductoController::class);
Route::resource('/productos', App\Http\Controllers\ProductoController::class);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
