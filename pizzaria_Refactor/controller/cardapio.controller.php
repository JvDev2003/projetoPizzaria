<?php

    class CardapioController{
        public function printCardapio(){
            require ('layout/header.layout.php');
            require ('view/cardapio.view.php');
            require ('layout/footer.layout.php');
        }
    }