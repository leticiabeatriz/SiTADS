<?php  

class Inscrito
{
	
	public $nome;
	public $sobrenome;
	public $cpf;
	public $email;
	public $senha;

	public function pegarDados(){
		
		$this->nome = $_POST['nome'];	
		$this->sobrenome = $_POST['sobrenome'];
		$this->cpf = $_POST['cpf'];
		$this->email = $_POST['email'];
		$this->senha = $_POST['senha'];
		$this->conSenha = $_POST['conSenha'];

	}

	public function validarCPF(){

	}

	private function validarEmail(){

		

	}

	public function validar(){

		validarCPF();
		validarEmail();

	}
}



?>