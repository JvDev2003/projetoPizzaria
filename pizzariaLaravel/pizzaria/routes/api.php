<?php

use App\Models\ItemPedido;
use App\Models\pizza;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/getPizza', function (Request $request) {
    $pizzas = pizza::all();
    return ['pizzas' => $pizzas];
});

Route::get('/getPizza', function (Request $request) {
    $pizzas = pizza::all();
    return ['pizzas' => $pizzas];
});

Route::get('/totalPizzasVendidas', function () {
    $pizzas = ItemPedido::query()
                            ->sum('quantidade');
    return ['pizzas' => $pizzas];
});

Route::get('/totalPizzasVendidas/{pizza}', function ($pizza) {
    $pizzas = ItemPedido::query()
                             ->where('fkPizza', '=', $pizza)
                             ->sum('quantidade');
    return ['pizzas' => $pizzas];
});





