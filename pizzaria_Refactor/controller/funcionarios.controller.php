<?php
class FuncionariosController{
    public function printFuncionarios(){
        require ('layout/header.layout.php');
        require ('view/funcionarios.view.php');
        require ('layout/footer.layout.php');
    }
    public function entrarSistema(){
        SistemaController::printSistema();
    }
}

