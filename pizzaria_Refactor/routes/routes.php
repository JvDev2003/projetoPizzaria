<?php

use Pecee\SimpleRouter\SimpleRouter as Router;

//GET
Router::get("/", "HomeController@index");
Router::get("/login", "LoginController@printLogin");
Router::get("/funcionario", "FuncionariosController@printFuncionarios");
Router::get("/registrar","RegistrarController@printRegistrar");
Router::get("/cardapio","CardapioController@printCardapio");
Router::get("/sistema","SistemaController@printSistema");
Router::get("/sistema/concluir/{id}", "SistemaController@concluirPedido");
Router::get("/sistema/excluir/{id}", "SistemaController@excluirPedido");
Router::get("/logout", "LoginController@logout");

//POST
Router::post("/login", "LoginController@efetuarLogin");
Router::post("/funcionario","FuncionariosController@entrarSistema");
Router::post("/cardapio", "CardapioController@fazerPedido");
Router::post("/confirmacao", "ConfirmacaoController@printConfirmacao");
Router::post("/registrar", "RegistrarController@realizarCadastro");



Router::start();