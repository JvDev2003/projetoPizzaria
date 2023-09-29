<?php
    require 'config.php';
    require 'verificaSessao.php';
    
    verifica_conectado();

    $regex = "/_/";
    //separa os elemento POST que são maior que 0
    function intervalo($elemento){
        if($elemento > 0 && $elemento <= 5){
            return $elemento;
        }
    };

    $pizzas = array_keys(array_filter($_POST,"intervalo"));    
    $valor = 0;
    
    foreach($pizzas as $pizza){
        $nome = preg_replace($regex, " ", $pizza);

        //query que procura no banco de dado, alguma correspondencia com os dados do login
        $sql = "SELECT valor FROM pizza WHERE nome = '$nome'";
        $result = mysqli_query($conn,$sql);//executa a query
        $resultado = mysqli_fetch_assoc($result)['valor']; 

        $valor += ($resultado * $_POST[$pizza]);
    }

    $data = date('Y/m/d H:i:s');
    $idCliente = $_SESSION['userID'];

    $sql = "INSERT INTO `pedido`(`data`, `fkCliente`, `valorTotal`) VALUES ('$data','$idCliente','$valor')";
    mysqli_query($conn, $sql);//executa a query

    foreach($pizzas as $pizza){
        $nome = preg_replace($regex, " ", $pizza);

        //query que procura no banco de dados o valor da pizza escolhida
        $sql = "SELECT valor FROM pizza WHERE nome = '$nome'";
        $result = mysqli_query($conn,$sql);//executa a query
        $resultado = mysqli_fetch_assoc($result); 
        $valor = $resultado['valor'] * $_POST[$pizza];

        //query que procura no banco de dados o id do pedido recem inserido
        $sql = "SELECT idPedido FROM pedido WHERE `data` = '$data' AND fkCliente = '$idCliente'";
        $result = mysqli_query($conn,$sql);//executa a query
        $resultado = mysqli_fetch_assoc($result)['idPedido'];

        //insere os itens na tabela itemPedido
        $sql = "INSERT INTO `itempedido`( `fkPedido`, `quantidade`, `fkPizza`, `valor`) VALUES ('$resultado','$_POST[$pizza]','$nome','$valor')";
        mysqli_query($conn,$sql);
    }

    mysqli_close($conn);//fecha o banco de dados
    header('Location: '. '../index.view.php');//redireciona para ordens
    die();// mata o codigo
    
?>