<?php 
    require 'config.php';
    require 'verificaSessao.php';

    //verifica_conectado(1);

    include 'config.php';
    $sql = "SELECT p.idPedido, p.data, p.valorTotal, i.quantidade, i.fkPizza FROM pedido p, itemPedido i WHERE p.idPedido = i.fkPedido";
    $dados = mysqli_query($conn,$sql);

    while($row = mysqli_fetch_assoc($dados)){//enquanto houver dados na array '$dados', atribuiu o valor linha por linha a variavel '$row'
    
        

    //cria uma linha na table onde é chamado esse procedimento preenchendo com os dados atuais de '$row'
?>
    <tr>
        <td><?php echo $row['idPedido'] ?></td>
        <td><?php echo $row['quantidade'] ?> X <?php echo $row['fkPizza'] ?></td>
        <td></td>
        <td></td>
        <td><?php echo $row['valorTotal'] ?></td>
        <td class="acoes">
            <a><i class="fa-solid fa-check" style="color:green"></i></a>
            <a><i class="fa-solid fa-xmark" style="color:red"></i></a>
        </td>
    </tr>
<?php
    }
?>