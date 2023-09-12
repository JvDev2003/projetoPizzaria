<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://kit.fontawesome.com/01c87f6c0d.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles/cardapio.css">
</head>
<body>
    <main>
        <?php require './elements/menu.view.php'; ?>
        <section class="sabores">
            <form method="post" action="./php/fazerPedido.php">
                <ul>
                    <?php
                        require 'php/imprimeSabores.php';
                    ?>
                </ul>
                <input type="submit" value="FAZER PEDIDO!">
            </form>
        </section>
        <script src="./js/script.js"></script>
    </main>
</body> 
</html>