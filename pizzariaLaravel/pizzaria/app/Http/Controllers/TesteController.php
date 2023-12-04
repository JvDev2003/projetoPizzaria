<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesteController extends Controller
{
    public static function teste(Request $request){

        $value = $request->session()->get('userName');

        print_r($value);

        return view('teste', ['teste' => $value]);
    }
}
