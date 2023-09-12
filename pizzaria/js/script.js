function adicionaUm(nome){
    let elemento = document.getElementById(nome);

    if(elemento.value >= 5){
        return;
    }

    elemento.value++;
}

function subtraiUm(nome){
    let elemento = document.getElementById(nome);

    if(elemento.value <= 0){
        return;
    }
    elemento.value--;
}

