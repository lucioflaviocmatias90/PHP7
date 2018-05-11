<?php 

/**
 * Encapsulamento - Aula 01 (parte 2)
 */
class Pessoa{

	// Atributos
	public $nome = "Rasmus Lerdof";
	protected $idade = 48;
	private $senha = "123456";

	// Métodos
	public function verDados(){

		echo $this->nome ."<br>";
		echo $this->idade ."<br>";
		echo $this->senha ."<br>";

	}
}

// Exemplo de Herança
class Programador extends Pessoa{

	// Métodos
	public function verDados(){

		// get_class() é util para ver qual classe está
		// sendo executada pelo programa
		echo get_class($this) ."<br>";

		echo $this->nome ."<br>";
		echo $this->idade ."<br>";
		echo $this->senha ."<br>";

	}

}

$objeto = new Programador();

$objeto->verDados();

?>