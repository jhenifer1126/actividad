<?php

use App\Http\Controllers\Controller;
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
Route::get('/',[App\Http\Controllers\Controller::class,'Bienvenidos'])->name('ruta');
Route::get('vistas',[Controller::class,'Holi']);
Route::get('vista',[Controller::class,'Tercera']);


Auth::routes();
Route::resource('productos',ProductoController::class)->names('productos');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

