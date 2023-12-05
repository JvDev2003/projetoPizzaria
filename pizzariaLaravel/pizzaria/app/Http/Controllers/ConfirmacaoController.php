<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConfirmacaoController extends Controller
{
    public function show(Request $request){
        $valores = array_filter($request->all(), function($elemento){
            if(strlen($elemento) == 2){
                return $elemento;
            }});
        $items = array_filter($request->all(), function($elemento){
            if($elemento > 0 && $elemento <= 5 && $elemento && strlen($elemento) == 1){
                return $elemento;
            }});

        return view('confirmacao',['pedido' => $items],['valores'=>$valores]);
    }
}
