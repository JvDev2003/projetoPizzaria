<?php 

    $pedidos = Pedido::getPedidos();

    foreach ($pedidos as $pedido):
        
    //cria uma linha na table onde é chamado esse procedimento preenchendo com os dados atuais de '$row'
?>
    <tr>
        <td><?= $pedido['id'] ?></td>
        <td><?= $pedido['items'] ?></td>
        <td><?php echo("R: {$pedido['endereco']['rua']}, {$pedido['endereco']['numero']}<br/>CEP: {$pedido['endereco']['cep']}") ?></td>
        <td><?= $pedido['nome'] ?></td>
        <td>R$<?= $pedido['valor'] ?>,00</td>
        <td>
            <a onClick="excluir(<?= $pedido['id'] ?>)"><i class="fa-solid fa-check" style="color:green"></i></a>
            <a><i class="fa-solid fa-xmark" style="color:red"></i></a>
        </td>
    </tr>
<?php endforeach; ?>