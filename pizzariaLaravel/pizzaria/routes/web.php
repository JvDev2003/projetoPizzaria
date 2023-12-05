<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\FuncionarioController;
use App\Http\Controllers\CardapioController;
use App\Http\Controllers\TesteController;
use App\Http\Controllers\ConfirmacaoController;
use App\Http\Controllers\SistemaController;

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
Route::post('cardapio', [CardapioController::class, 'fazerPedido']);
Route::get('funcionario', [FuncionarioController::class, 'show']);
Route::post('funcionario', [FuncionarioController::class, 'fazerLogin']);
Route::get('sistema', [SistemaController::class, 'show']);
Route::get('sistema/excluir/{id}',[SistemaController::class, 'Delete']);
Route::get('sistema/concluir/{id}',[SistemaController::class, 'edit']);
Route::get('teste', [TesteController::class, 'teste']);
Route::post('confirmacao', [ConfirmacaoController::class, 'show']);


