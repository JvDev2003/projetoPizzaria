<?php 
    require 'config.php';
    require 'verificaSessao.php';

    //verifica_conectado(1);

    $sql = "SELECT p.idPedido, p.data, p.valorTotal, c.nome, e.rua, e.numero, e.cep FROM pedido p, cliente c, endereco e WHERE p.fkCliente = c.cpf AND c.cpf = e.fkCliente";
    $dados = mysqli_query($conn,$sql);

    while($row = mysqli_fetch_assoc($dados)){//enquanto houver dados na array '$dados', atribuiu o valor linha por linha a variavel '$row'
    
    //monta a string que representa cada item pedido
    $sql = "SELECT quantidade, fkPizza FROM itemPedido WHERE fkPedido = {$row['idPedido']}";
    $itens = mysqli_query($conn,$sql);
    $frase = "";

    if(mysqli_num_rows($itens) > 1){
        while($item = mysqli_fetch_assoc($itens)){
            $frase.="{$item['quantidade']} X {$item['fkPizza']}<br \>";
        }
    }else{
        $item = mysqli_fetch_assoc($itens);
        $frase.="{$item['quantidade']} X {$item['fkPizza']}<br \>";
    }


    //cria uma linha na table onde é chamado esse procedimento preenchendo com os dados atuais de '$row'
?>
    <tr>
        <td><?= $row['idPedido'] ?></td>
        <td><?= $frase ?></td>
        <td><?php echo("R: {$row['rua']}, {$row['numero']}<br/>CEP: {$row['cep']}") ?></td>
        <td><?= $row['nome'] ?></td>
        <td><?php echo $row['valorTotal'] ?></td>
        <td>
            <a onClick="excluir(<?= $row['idPedido'] ?>)"><i class="fa-solid fa-check" style="color:green"></i></a>
            <a><i class="fa-solid fa-xmark" style="color:red"></i></a>
        </td>
    </tr>
<?php
    }
?>