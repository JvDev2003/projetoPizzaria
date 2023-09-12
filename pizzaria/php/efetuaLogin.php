<?php
    //procedimento que efetua o inicio de sessão a partir do login correto do usuario 
    if (!empty($_POST) AND (empty($_POST['email']) OR empty($_POST['senha']))) {//verifica se existe algum campo vazio
        header("Location: ../index.php"); exit;// se houver redireciona o usuario para o index
    }

    include 'config.php';//inicia o banco de dados
    
    //pega as variaveis e as atribui pelo metodo POST
    $email = $_POST['email'];
    $senha = $_POST['senha'];


    //query que procura no banco de dado, alguma correspondencia com os dados do login
    $sql = "SELECT l.email, l.permissoes, c.cpf FROM `login` l, `cliente` c WHERE email = '$email' AND senha = '$senha' AND l.email = c.fkLogin LIMIT 1";
    $result = mysqli_query($conn,$sql);//executa a query
    $resultado = mysqli_fetch_assoc($result);

    print_r($resultado);

    if (!isset($_SESSION)) session_start();//inicia a sessão

    //atribui os dados a sessão
    $_SESSION['userEmail'] = $resultado['email'];
    $_SESSION['userPermissoes'] = $resultado['permissoes'];
    $_SESSION['userID'] = $resultado['cpf'];

    header("Location: ../index.view.php");//redireciona para index 
?>