<?php

include_once("../negocio/dominio/Inscrito.php");
	
class InscritoDAO
{
	private $host = "localhost";
	private $usuario = "root";
	private $senha = "";
	private $bd = "sitads";
	private $mysqli;



	function __construct(){
	
		$this->mysqli = new mysqli($this->host, $this->usuario, $this->senha, $this->bd);

		if($this->mysqli->connect_errno){
			echo "falha na conexão: (".$mysqli->connect_errno.")".$mysqli->connect_error;
		}
	}

	public function inserir($inscrito){
		$insert_user = "INSERT INTO inscritos(nome, sobrenome, cpf, email, senha) VALUES ('".$inscrito->nome."', '".$inscrito->sobrenome."', '".$inscrito->cpf."', '".$inscrito->email."', '".$inscrito->senha."')";
		$sql_insert_user = $this->mysqli->query($insert_user) or die($this->mysqli->error);
	}

}

?>