<?php

    class ConfirmacaoController{
        public function printConfirmacao(){
            require ('layout/header.layout.php');
            require ('view/confirmacao.view.php');
            require ('layout/footer.layout.php');
        }
    }