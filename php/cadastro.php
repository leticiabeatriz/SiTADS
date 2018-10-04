<?php  
	
	include("conexao.php");

	$nome = $_POST['nome'];	
	$sobrenome = $_POST['sobrenome'];
	$cpf = $_POST['cpf'];
	$email = $_POST['email'];
	$senha = $_POST['senha'];
	$conSenha = $_POST['conSenha'];

	$insert_user = "INSERT INTO inscritos(nome, sobrenome, cpf, email, senha) VALUES ('$nome', '$sobrenome', '$cpf', '$email', '$senha')";
	$sql_insert_user = $mysqli->query($insert_user) or die($mysqli->error);

	


	

	
?>