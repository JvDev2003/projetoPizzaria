<?php

class LoginController {
    public function printLogin(){
        require ('layout/header.layout.php');
        require ('view/login.view.php');
        require ('alerts/alerts.php');
        require ('layout/footer.layout.php');
    }

    public function efetuarLogin(){
        require('models/login.model.php');
    }

    public function logout(){
        require ('models/logout.model.php');
    }
}
