<?php

include_once("../negocio/dominio/Inscrito.php");
	
class DAO
{
	private $host = "localhost";
	private $usuario = "root";
	private $senha = "";
	private $bd = "sitads";
	private $mysqli;



	function __construct()
	{
	
		$this->mysqli = new mysqli($this->host, $this->usuario, $this->senha, $this->bd);

		if($this->mysqli->connect_errno){
			echo "falha na conexão: (".$mysqli->connect_errno.")".$mysqli->connect_error;
		}
	}
}

?>