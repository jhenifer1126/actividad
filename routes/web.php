<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoriasController;
use App\Http\Controllers\SubcategoriasController;
use App\Http\Controllers\UsuariosController;
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
Route::get('/',[App\Http\Controllers\Controller::class,'Bienvenidos'])->name('ruta');


Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/contacto', [App\Http\Controllers\HomeController::class, 'index2'])->name('contacto');
Route::resource('productos',ProductoController::class)->names('productos');
Route::resource('categorias',CategoriasController::class)->names('categoria');
Route::resource('subcategorias',SubcategoriasController::class)->names('subcategoria');
Route::resource('user',UsuariosController::class)->names('user');


