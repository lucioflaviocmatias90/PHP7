<?php 

/**
 * Aula 01 - Minha Primeira Classe
 */
class Pessoa{

	// Atributos
	public $nome;

	// Métodos
	public function falar(){

		return "O meu nome é ".$this->nome;
	}
}

	// $this é uma referenciação de um atributo, somente usado dentro
	// de um método, fora do método usamos o $variavel, ex: $nome,
	// então:
	// 	*dentro do método: $this->nome;
	// 	*fora do método:   $nome;

$glaucio = new Pessoa();
$glaucio->nome = "Glaucio Daniel";
echo $glaucio->falar();

?>