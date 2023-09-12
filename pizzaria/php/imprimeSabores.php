<?php
    require 'config.php';

    //pega os elementos necessarios das tabelas pizza e valor
    $sql = "SELECT * FROM pizza";
    $result = mysqli_query($conn,$sql);//executa a query

    while($row = mysqli_fetch_assoc($result)){//percorre a array retorna pela query
?>
        <li>
            <div class="pizza">
                <img src="<?php echo $row['img_url']?>" rel="foto de pizza de <?php echo $row['nome']?>"/>    
            </div>
            <div class="descricao-pizza">
                <h3><?php echo $row['nome']?></h3>
                <span>(maximo 5 por cliente)</span>
                <p><?php echo $row['ingredientes']?></p>
                <p>R$<?php echo $row['valor']?>,00</p>
                <span class="plus" onClick="adicionaUm('<?php echo $row['nome']?>')">+</span><input type="number" max="5" min="0" name="<?php echo $row['nome']?>" id="<?php echo $row['nome']?>" readonly value="0"/><span class="minus" onClick="subtraiUm('<?php echo $row['nome']?>')">-</span>
            </div>
        </li>
<?php
    }
?>