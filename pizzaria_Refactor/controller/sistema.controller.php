<?php

    class SistemaController{
        public static function printSistema(){
            require ('layout/header.layout.php');
            require ('view/sistema.view.php');
            require ('layout/footer.layout.php');
        }
    }