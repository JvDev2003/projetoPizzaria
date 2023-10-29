<?php

class RegistrarController{
    public function printRegistrar(){
        require ('layout/header.layout.php');
        require ('view/registrar.view.php');
        require ('layout/footer.layout.php');
    }

    public function realizarCadastro(){
        require ('models/registrar.model.php');
    }
}