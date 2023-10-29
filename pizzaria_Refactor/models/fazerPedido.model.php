<?php

    require ("models/verificaSessao.model.php");

    $items = array_filter($_POST, function($elemento){if($elemento > 0 && $elemento <= 5){return $elemento;}});

    Pedido::makePedido($_SESSION['userID'], $items);

    header("Location: /?status=1"); exit;