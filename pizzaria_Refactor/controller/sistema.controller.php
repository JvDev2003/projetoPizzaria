<?php

    class SistemaController{
        public function printSistema(){
            require ('layout/header.layout.php');
            require ('alerts/alerts.php');
            require ('view/sistema.view.php');
            require ('layout/footer.layout.php');
        }

        public static function concluirPedido($id){
            Pedido::concluirPedido($id);
            header("Location: /sistema?confirmado=1&pedido={$id}"); exit;
        }

        public static function excluirPedido($id){
            Pedido::deletarPedido($id);
            header("Location: /sistema?excluido=1&pedido={$id}"); exit;
        }
    }