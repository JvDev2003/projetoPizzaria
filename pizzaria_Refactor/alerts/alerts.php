<?php
if (!empty($_GET)) {
    if (!empty($_GET['erro']) && $_GET['erro'] == 1) {
        require ('alerts/loginError.php');
    }elseif (!empty($_GET['status']) && $_GET['status'] == 1) {
        require ('alerts/PedidoOK.php');
    }elseif (!empty($_GET['confirmado']) && $_GET['confirmado'] == 1) {
        require ('alerts/confirmado.php');
    }elseif (!empty($_GET['excluido']) && $_GET['excluido'] == 1) {
        require ('alerts/excluido.php');
    }elseif (!empty($_GET['cadastrado']) && $_GET['cadastrado'] == 1) {
        require ('alerts/cadastrado.php');
    }       
}