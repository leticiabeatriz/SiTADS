<?php  

	include_once("../persistencia/InscritoDAO.php");
	include_once("../negocio/dominio/Inscrito.php");
	
	$banco = new inscritoDAO();
	$inscrito = new Inscrito();

	$inscrito->pegarDados();
	$inscrito->validarCPF();
	$banco->inserir($inscrito);

?>