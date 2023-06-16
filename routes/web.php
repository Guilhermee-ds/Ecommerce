<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;
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

Route::match(['get','post'],'/',[ProdutoController::class,'index'])
->name('home');

Route::match(['get','post'],'/categoria',[ProdutoController::class,'categoria'])
->name('categoria');

Route::match(['get','post'],'/cadastrar',[ClienteController::class,'cadastrar'])
->name('cadastrar');
