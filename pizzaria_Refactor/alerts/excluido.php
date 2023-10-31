<script>
    let node = document.getElementById('alertSistem');
    node.style.backgroundColor = 'yellow';
    node.style.color = 'black';
    node.appendChild(document.createTextNode('Pedido de número <?= $_GET['pedido']?> excluido com sucesso!!!'));
</script>