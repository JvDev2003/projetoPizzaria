<?php

if (empty($_POST) AND (empty($_POST['email']) OR empty($_POST['senha']))) {//verifica se existe algum campo vazio
    header("Location: /login?erro=1"); exit;// se houver redireciona o usuario para o index
}

$conn = Conexao::get();

$query = $conn->prepare("SELECT l.email, l.permissoes, c.cpf, c.nome FROM `login` l, `cliente` c WHERE email = '{$_POST['email']}' AND senha = '{$_POST['senha']}' AND l.email = c.fkLogin");
$query->execute();
$resultado = $query->fetchAll(PDO::FETCH_ASSOC);

if ($query->rowCount() == 1){
    if (!isset($_SESSION)) session_start();//inicia a sessão

    //atribui os dados a sessão
    $_SESSION['userEmail'] = $resultado[0]['email'];
    $_SESSION['userPermissoes'] = $resultado[0]['permissoes'];
    $_SESSION['userID'] = $resultado[0]['cpf'];
    $_SESSION['userName'] = $resultado[0]['nome'];


    header("Location: /cardapio");
    exit;
}

header("Location: /login?erro=1");