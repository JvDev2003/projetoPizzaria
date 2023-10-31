<?php

    $conn = Conexao::get();
    $conn->beginTransaction();

    User::regitrarUsuario($_POST, $conn);
    User::registrarDadosClientes($_POST, $conn);
    User::registrarDadosEndereco($_POST, $conn);

    $conn->commit();

    header("location: /login");

