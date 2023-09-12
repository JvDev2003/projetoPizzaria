<?php
    require 'config.php';

    //atribui os dados POST as variveis 
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $cpf = $_POST['cpf'];
    $senha = $_POST['senha'];
    $rua = $_POST['rua'];
    $numero = $_POST['numero'];
    $cep = $_POST['cep'];
    
    //query que adiciona os dados enviados para tabela de login
    $sql = "INSERT INTO `login`(`email`, `senha`, `permissoes`) VALUES ('$email','$senha','0')";
    mysqli_query($conn, $sql);//executa a query

    //query que adiciona os dados enviados para a tabela cliente
    $sql = "INSERT INTO `cliente`(`nome`, `fkLogin`, `cpf`) VALUES ('$nome','$email','$cpf')";
    mysqli_query($conn, $sql);

    //query que adiciona os dados enviado para tabela de endereço
    $sql = "INSERT INTO `endereco`(`rua`, `numero`, `cep`, `fkCliente`) VALUES ('$rua','$numero','$cep','$cpf')";
    mysqli_query($conn, $sql);//executa a query

    mysqli_close($conn);//fecha o banco de dados
    header('Location: '. '../index.view.php');//redireciona para ordens
    die();// mata o codigo
?>
