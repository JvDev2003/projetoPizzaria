<?php
    
    class HomeController{
        public function index(){
            require ('layout/header.layout.php');
            require ('view/index.view.php');
            require ('layout/footer.layout.php');
        }
    }

    

    /*//apenas um teste

    require('vendor/autoload.php');
    
    $conn = Conexao::get();

    $query = $conn->prepare('SELECT * FROM pizza');
    $query->execute();
    $pizzas = $query->fetchAll(PDO::FETCH_OBJ);

    foreach ($pizzas as $pizza) {
        print_r($pizza);
    }*/