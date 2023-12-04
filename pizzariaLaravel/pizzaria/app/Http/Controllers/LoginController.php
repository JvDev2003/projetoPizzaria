<?php

namespace App\Http\Controllers;

use App\Models\ClienteModel;
use App\Models\LoginModel;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    private $senha;
    private $email;


    public function show(){
        return view('login');
    }

    public function logar(Request $request){
        $login = $request->input('email');
        $senha = $request->input('senha');

        $retorno = LoginModel::query()
                                ->where('email', '=', $login)
                                ->where('senha', '=', $senha)
                                ->get();

        if(sizeof($retorno) == 1){
            $dadosCliente = ClienteModel::query()
                                            ->where('fkLogin', '=', $login)
                                            ->get();
            
            $request->session()->put('userName', $dadosCliente[0]->nome);
            $request->session()->put('userID', $dadosCliente[0]->cpf);
            $request->session()->put('userPermissoes', $retorno[0]->permissoes);
            $request->session()->put('userEmail', $retorno[0]->email);
                                   
        }

        //TesteController::teste($request);

        return redirect('/');
    }
}
