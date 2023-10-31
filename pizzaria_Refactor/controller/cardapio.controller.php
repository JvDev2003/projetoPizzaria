<?php

    class CardapioController{
        public function printCardapio(){
            Sessao::verificaConectado('login');
            require ('layout/header.layout.php');
            require ('view/cardapio.view.php');
            require ('layout/footer.layout.php');
        }

        public function fazerPedido(){
            require ('models/fazerPedido.model.php');
        }
    }