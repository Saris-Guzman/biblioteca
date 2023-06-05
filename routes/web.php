<?php

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
    return view('Principal');
});

Auth::routes();

Route::resource('autors', App\Http\Controllers\AutorController::class)->middleware('auth');
Route::resource('categorias', App\Http\Controllers\CategoriaController::class)->middleware('auth');
Route::resource('editorials', App\Http\Controllers\EditorialController::class)->middleware('auth');
Route::resource('inventarios', App\Http\Controllers\InventarioController::class)->middleware('auth');
Route::resource('libros', App\Http\Controllers\LibroController::class)->middleware('auth');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
