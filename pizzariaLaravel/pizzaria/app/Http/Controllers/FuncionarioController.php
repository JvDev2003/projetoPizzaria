<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LoginModel;

class FuncionarioController extends Controller
{
    public function show(){
        return view('funcionario');
    }

    public function fazerLogin(Request $request){
        $login = $request->input('email');
        $senha = $request->input('senha');

        $retorno = LoginModel::query()
                                ->where('email', '=', $login)
                                ->where('senha', '=', $senha)
                                ->get();

        if(sizeof($retorno) == 1){
            
            $request->session()->put('userPermissoes', $retorno[0]->permissoes);
            $request->session()->put('userEmail', $retorno[0]->email);

            return redirect('sistema');
                                   
        }
    }
}
