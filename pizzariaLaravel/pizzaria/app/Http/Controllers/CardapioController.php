<?php

namespace App\Http\Controllers;
use App\Models\cardapioModel;

use App\Models\ItemPedido;
use App\Models\Pedido;
use Illuminate\Http\Request;

class CardapioController extends Controller
{
    public function show(){
        $cardapio = CardapioModel::all();

        return view('cardapio', ['pizzas' => $cardapio]);
    }

    public function fazerPedido(Request $request){

        $items = array_filter($request->all(), function($elemento){
            if($elemento > 0 && $elemento <= 5 && $elemento && strlen($elemento) == 1){
                return $elemento;
            }});
        $id = $this->insertPedido($request);

        foreach ($items as $key => $value) {
            $this->insertItemPedido($id, $key, $value);
        }

        return redirect('/');
    }

    public function insertPedido(Request $request){
        $date = date('Y/m/d H:i:s');
        $cliente = $request->session()->get('userID');

        $id = Pedido::query()
                      ->insertGetId([
                                  'data' => $date,
                                  'fkCliente' => $cliente,
                                  'concluido' => "0"
                              ]);
        return $id;
    }

    public function insertItemPedido($id, $key, $quantidade){
        ItemPedido::query()
                    ->insert([
                        'fkPedido' => $id,
                        'quantidade' => $quantidade,
                        'fkPizza' => $this->trataString($key)
                    ]);
    }

    public function trataString($string){
        return preg_replace('/_/', " ", $string);
    }
}
