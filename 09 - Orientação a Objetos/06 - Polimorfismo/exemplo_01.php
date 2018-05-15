<?php 

/* 	O que é Polimorfismo ?
	Classes diferentes que tenha métodos com nomes iguais
	mas as classes herdadas que contêm os nomes dos
	métodos iguais possuem conteúdos diferentes
*/

class Animal{

	public function andar(){

		return "Som";
	}

	public function mover(){

		return "Anda";
	}
}

class Cachorro extends Animal{

	public function falar(){

		return "Late";
	}
}

class Gato extends Animal{

	public function falar(){

		return "Mia";
	}
}

class Passaro extends Animal{

	public function falar(){

		return "Canta";
	}

	public function mover(){

		// parent está chamando a método da classe pai,
		// que irá imprimir "Anda"
		return "Voa e ". parent::mover();
	}
}

$pluto = new Cachorro();

echo $pluto->falar() ."<br>";

echo $pluto->mover() ."<br>";

echo "--------------------------------"."<br>";

$garfield = new Gato();

echo $garfield->falar() ."<br>";

echo $garfield->mover() ."<br>";

echo "--------------------------------"."<br>";

$bird = new Passaro();

echo $bird->falar() ."<br>";

echo $bird->mover() ."<br>";

echo "--------------------------------";

?>