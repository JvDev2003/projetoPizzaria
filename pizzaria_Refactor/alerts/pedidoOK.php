<script>
    let node = document.getElementById('alertNode');
    node.style.display = 'block';
    node.appendChild(document.createTextNode('Pedido realizado com sucesso!!!'));

    setTimeout(() => {
        document.getElementById('container').removeChild(node);
    }, 5000);
</script>