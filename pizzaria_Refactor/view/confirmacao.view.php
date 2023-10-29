<section class="confirmacao">
    <form method="post" action="./cardapio">
        <ul>
            <h1>Pedido</h1>
            <p>Sabor<span>Valor</span></p>
            <?php require 'models/confirmacao.model.php';?>
        </ul>
        <input type="submit" value="CONFIRMAR PEDIDO!">
    </form>
</section>