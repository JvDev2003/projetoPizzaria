<?php
    //pega os elementos necessarios das tabelas pizza e valor
    $conn = Conexao::get();

    $query = $conn->prepare('SELECT * FROM pizza');
    $query->execute();
    $pizzas = $query->fetchAll(PDO::FETCH_ASSOC);

    foreach($pizzas as $row){//percorre a array retorna pela query
?>
        <li>
            <div class="pizza">
                <img src="<?php echo $row['img_url']?>" rel="foto de pizza de <?php echo $row['nome']?>"/>    
            </div>
            <div class="descricao-pizza">
                <h3><?php echo $row['nome']?></h3>
                <span>(máximo 5 por cliente)</span>
                <p><?php echo $row['ingredientes']?></p>
                <p>R$<?php echo $row['valor']?>,00</p>
                <span class="plus" onClick="adicionaUm('<?php echo $row['nome']?>')">+</span><input type="number" max="5" min="0" name="<?php echo $row['nome']?>" id="<?php echo $row['nome']?>" readonly value="0"/><span class="minus" onClick="subtraiUm('<?php echo $row['nome']?>')">-</span>
            </div>
        </li>
<?php
    }
?>