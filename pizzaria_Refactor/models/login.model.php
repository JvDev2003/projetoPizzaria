<?php

if (empty($_POST) AND (empty($_POST['email']) OR empty($_POST['senha']))) {//verifica se existe algum campo vazio
            header("Location: ./"); exit;// se houver redireciona o usuario para o index
        }

        $conn = Conexao::get();


        $query = $conn->prepare("SELECT l.email, l.permissoes, c.cpf FROM `login` l, `cliente` c WHERE email = '{$_POST['email']}' AND senha = '{$_POST['senha']}' AND l.email = c.fkLogin");
        $query->execute();
        $resultado = $query->fetchAll(PDO::FETCH_ASSOC);

        if (!isset($_SESSION)) session_start();//inicia a sessão

        //atribui os dados a sessão
        $_SESSION['userEmail'] = $resultado[0]['email'];
        $_SESSION['userPermissoes'] = $resultado[0]['permissoes'];
        $_SESSION['userID'] = $resultado[0]['cpf'];

        header("Location: /");//redireciona para index 