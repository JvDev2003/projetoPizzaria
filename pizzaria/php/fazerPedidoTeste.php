<?php
    require '../classes/conexao.class.php';
    require '../classes/Pedido.class.php';
    require 'verificaSessao.php';

    function filtraPedido($elemento){
        if($elemento > 0 && $elemento <= 5){return $elemento;}
    }

    $items = array_filter($_POST, 'filtraPedido');

    $pedido = new Pedido($_SESSION['userID']);
    $pedido->insereItens($items);

    

    
    //header('Location: '. '../index.view.php');//redireciona para ordens
    //die();// mata o codigo
    
?>