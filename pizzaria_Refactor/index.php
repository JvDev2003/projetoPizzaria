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

    Router::start();


        /*$page = $_GET['page'] ?? ''; 
        
        switch ($page) {
            case '':
                require ('controller/index.controller.php');
            break;
            
            case 'login':
                require ('controller/login.controller.php');
            break;
            case 'registrar':
                require ('controller/registrar.controller.php');
            break;
            case 'funcionarios':
                require ('controller/funcionarios.controller.php');
            break;    
            default:      
        }
    ?>

    </php ?>*/