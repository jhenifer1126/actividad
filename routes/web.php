<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\inflables;
use App\Http\Controllers\Brinca;
use App\Http\Controllers\Ball;


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
Route::get('categoria',[App\Http\Controllers\Controller::class,'Categorias'])->name('catego');
Route::resource('productos',ProductoController::class)->names('productos');
Route::resource('Inflables',inflables::class)->names('inflable');
Route::resource('Brinca-Brinca',Brinca::class)->names('brinca');
Route::resource('Bumper-Ball',Ball::class)->names('ball');


