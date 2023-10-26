<section class="sabores">
    <form method="post" action="./php/fazerPedido.php">
        <ul>
            <?php require 'models/cardapio.model.php';?>
        </ul>
        <input type="submit" value="FAZER PEDIDO!">
    </form>
</section>