<?php
      session_start(); //inicia a sessão
      session_destroy(); //destrói a sessão limpando todos os valores salvos
      header("Location: ../index.view.php"); exit; //redireciona o visitante
?>