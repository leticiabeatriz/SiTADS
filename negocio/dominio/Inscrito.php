<?php  

class Inscrito
{
	
	public $nome;
	public $sobrenome;
	public $cpf;
	public $email;
	public $senha;
	public $tipo;
	


	public function pegarDados(){
		
		$this->nome = $_POST['nome'];	
		$this->sobrenome = $_POST['sobrenome'];
		$this->cpf = $_POST['cpf'];
		$this->email = $_POST['email'];
		$this->senha = $_POST['senha'];
		$this->conSenha = $_POST['conSenha'];

	}

	public function validarSenha(){
		if ($this->senha =! $this->conSenha) {
			$errosLogin[] = "As senhas digitadas não coincidem"
		}
	}

	public function validarCPF(){

		$Soma = 0;

		for ($i=0; $i < 11; $i++) { 
			$Soma += $this->cpf{$i};
		}

		if ($Soma{0} =! $Soma{1}) {
			$errosLogin[] = "CPF inválido"
		}

	}

	public function validarEmail(){

		

	}

	private function validarEmail(){

		

	}

	public function validar(){

		validarCPF();
		validarEmail();

	}
}



?>