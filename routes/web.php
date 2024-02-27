<?php

use App\Http\Controllers\ControladorRaiz;
use App\Http\Controllers\ControladorPrimo;
use App\Http\Controllers\ControladorNotas;
use App\Http\Controllers\ControladorAmigos;
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


Route::get('PrimoFormulario',[ControladorPrimo::class,'create']);
Route::post('PrimoFormulario',[ControladorPrimo::class,'store'])->name('Pri.store');

Route::get('AmigosFormulario',[ControladorAmigos::class,'create']);
Route::post('AmigosFormulario',[ControladorAmigos::class,'store'])->name('ami.store');

Route::get('NotasFormulario',[ControladorNotas::class,'create']);
Route::post('NotasFormulario',[ControladorNotas::class,'store'])->name('Not.store');

Route::get('RaizFormulario',[ControladorRaiz::class,'create']);
Route::post('RaizFormulario',[ControladorRaiz::class,'store'])->name('Raiz.store');
