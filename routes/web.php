<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ProductoController;

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
Auth::routes();

Route::get('/', function () {
    return redirect()->to('/login');
});
Route::get('/home', function(){
    return redirect()->to('/producto');
});

Route::resource('categoria', CategoriaController::class)->middleware('auth');
Route::resource('producto', ProductoController::class);

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/producto', function(){
//     return redirect()->to('/productos')->middleware('gest');
// });