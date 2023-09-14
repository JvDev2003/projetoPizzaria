<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="js/script.js"></script>
    <script src="https://kit.fontawesome.com/01c87f6c0d.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles/sistema.css">
</head>
<body>
    <main>
        <?php require './elements/menu.view.php'; ?>
        <section class="pedidos">
            <table>
                <thead>
                    <tr>
                        <th>N° Pedido</th>
                        <th>Itens</th>
                        <th>Endereço</th>
                        <th>Cliente</th>
                        <th>Valor Total</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php require 'php/pedidos.php'; ?>
                </tbody>
            </table>
        </section>
    </main>
</body>
</html>