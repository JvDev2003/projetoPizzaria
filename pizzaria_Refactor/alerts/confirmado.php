<script>
    let node = document.getElementById('alertSistem');
    node.style.backgroundColor = 'green';
    node.style.color = 'white';
    node.appendChild(document.createTextNode('Pedido de número <?= $_GET['pedido']?> confirmado com sucesso!!!'));
</script>