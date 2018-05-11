<?php 

/**
 * Encapsulamento - Aula 01 (parte 1)
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

$objeto = new Pessoa();

$objeto->verDados();

// COLINHA

// Quem pode ter acesso a atributos e metodos
// 1 - atributos e metodos da mesma classe
// 2 - atributos e metodos das classes extendidias(filhas)
// 3 - e objetos

// Quando o atributo é publico, todo mundo VÊ ou ACESSA! 1, 2 e 3
// Quando o atributo é protegido, somente o objeto não ACESSA! 1 e 2
// Quando o atributo é privado, apenas atributos e metodos da classe! 1

?>