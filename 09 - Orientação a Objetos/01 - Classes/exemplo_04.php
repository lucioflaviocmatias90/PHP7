<?php 

/*
 * Aula 04 - Métodos Mágicos
 */
class Endereco{
	
	// Atributos
	private $logradouro;
	private $numero;
	private $cidade;

	// Construtor
	public function __construct($a, $b, $c){

		$this->logradouro = $a;
		$this->numero = $b;
		$this->cidade = $c;

	}

	// Destrutor
	public function __destruct(){

		var_dump("DESTRUIR");

	}

	// Método toString() - uma função para converter um objeto em STRING
	public function __toString(){

		return $this->logradouro.", ".$this->numero. " - ".$this->cidade;
	}
}

$meuEndereco = new Endereco("Rua Ademar Saraiva Leão", "123", "Santos");

// echo "<pre>";
// print_r($meuEndereco);
// unset($meuEndereco);
// echo "</pre>";

echo $meuEndereco;

?>