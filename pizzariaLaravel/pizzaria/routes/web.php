<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\FuncionarioController;
use App\Http\Controllers\CardapioController;
use App\Http\Controllers\TesteController;
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

Route::get('/', [IndexController::class, 'show']);
Route::get('login', [LoginController::class, 'show']);
Route::post('login', [LoginController::class, 'logar']);
Route::get('cardapio', [CardapioController::class, 'show']);
Route::get('funcionario', [FuncionarioController::class, 'show']);
Route::get('teste', [TesteController::class, 'teste']);


