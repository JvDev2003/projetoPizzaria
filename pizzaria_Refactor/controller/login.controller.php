<?php

class LoginController {
    public function printLogin(){
        require ('layout/header.layout.php');
        require ('view/login.view.php');
        require ('layout/footer.layout.php');
    }

    public function efetuarLogin(){
        require('models/login.model.php');
    }


}


/*require ('layout/header.layout.php');
require ('view/login.view.php');
require ('layout/footer.layout.php');*/