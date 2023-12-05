<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesteController extends Controller
{
    public static function teste(Request $request){
        $items = array_filter($request->all(), function($elemento){
            if($elemento > 0 && $elemento <= 5 && $elemento && strlen($elemento) == 1){
                return $elemento;
            }});

        print_r($items);

        return view('teste');
    }
}
