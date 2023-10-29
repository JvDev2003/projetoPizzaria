<?php
    require "vendor/autoload.php";

    use Pecee\SimpleRouter\SimpleRouter as Router;


    Router::get("/", "HomeController@index");
    Router::get("/login", "LoginController@printLogin");
    Router::get("/funcionario", "FuncionariosController@printFuncionarios");
    Router::get("/registrar","RegistrarController@printRegistrar");
    Router::get("/cardapio","CardapioController@printCardapio");
    Router::get("/sistema","SistemaController@printSistema");
    Router::post("/login", "LoginController@efetuarLogin");
    Router::post("/funcionario","FuncionariosController@entrarSistema");
    Router::post("/cardapio", "CardapioController@fazerPedido");
    Router::delete("/login","LoginController@logout");
    Router::post("/confirmacao", "ConfirmacaoController@printConfirmacao");//metodo para teste apenas
    Router::get("/sistema/concluir/{id}", "SistemaController@concluirPedido");//metodo para teste apenas
    Router::get("/sistema/excluir/{id}", "SistemaController@excluirPedido");//metodo para teste apenas


    Router::start();