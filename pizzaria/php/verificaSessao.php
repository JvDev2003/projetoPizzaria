<?php 

//sessão precisa ser iniciada em cada página diferente
if (!isset($_SESSION)) session_start();

function verifica_conectado (){

  //há variável da sessão que identifica o usuário?
  if (!isset($_SESSION['userEmail']) OR !isset($_SESSION['userID'])) {
      //destrói a sessão
      session_destroy();
      //redireciona o visitante de volta pro login
      header("Location: ../login.view.php"); exit;
  }
}

function verificaPermissao($permissao){

  // Verifica se o usuario tem a permissão necessaria para acessar a pagina
  if (!isset($_SESSION['userPermissoes']) < $permissao) {
      // Destrói a sessão por segurança
      session_destroy();
      // Redireciona o visitante de volta pro login
      header("Location: ../login.view.php"); exit;
  }
}

?>