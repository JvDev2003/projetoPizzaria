<main id="containerSistem">
    <div id="alertSistem"></div>
    <section class="pedidos">
        <h1>Pedidos</h1>
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
                <?php require ("models/pedidos.model.php")?>
            </tbody>
        </table>
    </section>
</main>