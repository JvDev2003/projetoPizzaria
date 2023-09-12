<?php 

// A sessão precisa ser iniciada em cada página diferente
if (!isset($_SESSION)) session_start();

function verifica_conectado (){

  // Verifica se não há a variável da sessão que identifica o usuário
  if (!isset($_SESSION['userEmail']) OR !isset($_SESSION['userID'])) {
      // Destrói a sessão por segurança
      session_destroy();
      // Redireciona o visitante de volta pro login
      header("Location: ../login.view.php"); exit;
  }
}
?>