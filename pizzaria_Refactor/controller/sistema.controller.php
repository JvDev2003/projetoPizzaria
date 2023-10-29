<?php

    class SistemaController{
        public static function printSistema(){
            require ('layout/header.layout.php');
            require ('view/sistema.view.php');
            require ('layout/footer.layout.php');
        }

        public static function concluirPedido($id){
            Pedido::concluirPedido($id);
            header("Location: /sistema?confirmado=1"); exit;
        }

        public static function excluirPedido($id){
            Pedido::deletarPedido($id);
            header("Location: /sistema"); exit;
        }
    }