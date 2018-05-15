<?php 

class Cadastro{

	private $nome;
	private $email;
	private $senha;

	// Getters e Setters
	public function getNome():string {

		return $this->nome;
	}

	public function setNome($nome){

		$this->nome = $nome;
	}

	public function getEmail():string {

		return $this->email;
	}

	public function setEmail($email){

		$this->email = $email;
	}

	public function getSenha():string {

		return $this->senha;
	}

	public function setSenha($senha){

		$this->senha = $senha;
	}

	// método toString
	public function __toString(){

		return json_encode(array(
			"nome"=>$this->getNome(),
			"email"=>$this->getEmail(),
			"senha"=>$this->getSenha()
		));
	}
}

?>