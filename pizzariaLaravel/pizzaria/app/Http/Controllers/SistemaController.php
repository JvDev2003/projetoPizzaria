<?php

namespace App\Http\Controllers;

use App\Models\ItemPedido;
use App\Models\pedido;
use App\Models\pizza;
use Carbon\Exceptions\InvalidPeriodDateException;
use Illuminate\Http\Request;

class SistemaController extends Controller
{
    public function show(){
        $pedidos = pedido::query()
                    ->select('idPedido', 'fkCliente')
                    ->where('concluido', '=', 0)
                    ->get();

        $items = $this->getItemsPedidos($pedidos);
        return view('sistema',['pedidos'=> $pedidos], ['items'=> $items]);
    }

    public function getItemsPedidos($pedidos){
        $data = [];

        foreach ($pedidos as $key => $value) {
            $data[$value->idPedido] = []; 
            $items = ItemPedido::query()
                                ->select('quantidade', 'fkPizza')
                                ->where('fkPedido', '=', $value->idPedido)
                                ->get();
            $contador = 0;
            foreach ($items as $key => $valor) {
                $valorPizza = pizza::query()
                                ->select('valor')
                                ->where('nome','=', $valor->fkPizza)
                                ->get()[0];
                if($contador <= 0){
                    $data[$value->idPedido]['items'] = [
                        'quantidade' => $valor->quantidade,
                        'fkPizza' => $valor->fkPizza,
                        'valor' => $valorPizza->valor
                    ];
                    $contador++;
                }else{
                    $data[$value->idPedido]['items'] = [
                        'quantidade' => $valor->quantidade,
                        'fkPizza' => $valor->fkPizza,
                        'valor' => $valorPizza->valor
                    ];
;
                } 
            }
            
        }

        return $data;
    }

    public function delete($id){
        pedido::query()
                ->where('idPedido', '=' ,$id)
                ->delete();

        return redirect('sistema');
    }

    public function edit($id){
        pedido::query()
                ->where('idPedido', '=' ,$id)
                ->update(['concluido' => 1]);

        return redirect('sistema');
    }

}
