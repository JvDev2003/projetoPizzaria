<?php
    require('vendor/autoload.php');

    require ('layout/header.layout.php');

    /*//apenas um teste
    
    $conn = Conexao::get();

    $query = $conn->prepare('SELECT * FROM pizza');
    $query->execute();
    $pizzas = $query->fetchAll(PDO::FETCH_OBJ);

    foreach ($pizzas as $pizza) {
        print_r($pizza);
    }*/

    require ('view/index.view.php');
    require ('layout/footer.layout.php');