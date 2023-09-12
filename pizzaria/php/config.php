<?php
	//procedimento que faz a conexão com banco de dados.

	$servername ="localhost";//nome do server
	$database ="pizzaria";//nome do banco de dados
	$username ="root";//nome do usuario
	$senha = "";//senha do usuario
	
	//tenta fazer a conexão caso falhe retorna um erro de conexão.
	$conn = mysqli_connect($servername,$username,$senha,$database) or die('ERRO!!' . mysqli_connect_error());

	date_default_timezone_set('America/Sao_Paulo');
	
?>

