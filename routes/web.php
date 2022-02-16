<?php

use Illuminate\Support\Facades\Route;
use App\Http\Models\Categorias;
use App\Http\Models\Productos;
use App\Http\Controllers\CategoriasController;
use App\Http\Controllers\ProductosController;


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
    return view('welcome');
});

Auth::routes();
// Categorias::routes();
// Productos::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Route::get('/categorias', [CategoriasController::class, 'index' ]);

Route::get('/categorias', [App\Http\Controllers\CategoriasController::class, 'index']);
Route::get('/categorias/crear', [App\Http\Controllers\CategoriasController::class, 'create']);
Route::post('/categorias/guardar', [App\Http\Controllers\CategoriasController::class, 'store']);
Route::post('/categorias/actualizar/{id}', [App\Http\Controllers\CategoriasController::class, 'update']);
Route::post('/categorias/eliminar/{id}', [App\Http\Controllers\CategoriasController::class, 'destoy']);


Route::get('/productos', [App\Http\Controllers\ProductosController::class, 'index']);
Route::get('/productos/crear', [App\Http\Controllers\ProductosController::class, 'create']);
Route::post('/productos/guardar', [App\Http\Controllers\ProductosController::class, 'store']);
Route::post('/productos/actualizar/{id}', [App\Http\Controllers\ProductosController::class, 'update']);
Route::post('/productos/eliminar/{id}', [App\Http\Controllers\ProductosController::class, 'destroy']);

