<?php

namespace App\Http\Controllers;
use App\Models\cardapioModel;

use Illuminate\Http\Request;

class CardapioController extends Controller
{
    public function show(){
        $cardapio = CardapioModel::all();

        return view('cardapio', ['pizzas' => $cardapio]);
    }
}
