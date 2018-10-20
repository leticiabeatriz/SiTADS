<?php

include_once("../negocio/dominio/Inscrito.php");
include_once("../negocio/dominio/Inscrito.php");
	
class InscritoDAO extends DBMySQL {
	private $host = "localhost";
	private $usuario = "root";
	private $senha = "";
	private $bd = "sitads";
	private $mysqli;

	

	public function inserir($Inscrito){	
		$this->query("INSERT INTO inscritos (nome, sobrenome, cpf, email, senha, tipo) VALUES ('".$inscrito->nome."','".$inscrito->cpf."');" );
	}

	public function atualizarTipo($id){	
		$this->query("UPDATE inscritos SET tipo = 2 WHERE id = '".$id."';");
	}	

	public function selectEmail($email){
		return $this->select("SELECT email FROM inscritos WHERE email = '".$email."';");
	}

	public function selectCPF(){
		return $this->select("SELECT email FROM inscritos WHERE cpf = '".$cpf."';");
	}


}


?>