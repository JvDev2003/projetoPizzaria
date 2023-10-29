<?php
    //pega os elementos necessarios das tabelas pizza e valor
    $conn = Conexao::get();

    $query = $conn->prepare('SELECT * FROM pizza');
    $query->execute();
    $pizzas = $query->fetchAll(PDO::FETCH_ASSOC);

    foreach($pizzas as $row)://percorre a array retorna pela query
?>
        <li>
            <div class="pizza">
                <img src="<?=$row['img_url']?>" rel="foto de pizza de <?= $row['nome']?>"/>    
            </div>
            <div class="descricao-pizza">
                <h3><?= $row['nome']?></h3>
                <span>(máximo 5 por cliente)</span>
                <p><?=  $row['ingredientes']?></p>
                <p>R$<?= $row['valor']?>,00</p>
                <span class="plus" onClick="adicionaUm('<?= $row['nome']?>')">+</span><input type="number" max="5" min="0" name="<?= $row['nome']?>" id="<?php echo $row['nome']?>" readonly value="0"/><span class="minus" onClick="subtraiUm('<?php echo $row['nome']?>')">-</span>
                <input type="hidden" name="<?= $row['nome'] ?>Valor" id="<?= $row['nome'] ?>Valor" value="<?= $row['valor']?>">
            </div>
        </li>
<?php endforeach; ?>