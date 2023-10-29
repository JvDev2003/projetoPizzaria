<?php

    $items = array_filter($_POST, function($elemento){if($elemento > 0 && $elemento <= 5){return $elemento;}});

    $valorTotal = 0;
    foreach($items as $key => $item)://percorre a array retorna pela query
    $valorTotal += $_POST["{$key}Valor"] * $item;
?>
    <li>
        <div class="descricao-pedido">
            <input type="hidden" name="<?= Pedido::trataString($key) ?>" id="<?= Pedido::trataString($key) ?>" value="<?= $item ?>">
            <p><?= $item ?> X <?= Pedido::trataString($key) ?> <span>R$<?= $_POST["{$key}Valor"]*$item ?>,00</span></p>
        </div>
    </li>
<?php endforeach; ?>
    <p id="total">Valor Total <span>R$<?= $valorTotal ?>,00</span></p>

