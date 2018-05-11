<?php 

/**
 * Aula 02 - Atributos e Métodos
 */
class Carro{

	// Atributos
	private $modelo;
	private $motor;
	private $ano;

	// Métodos Getters e Setters
	public function getModelo(){
		return $this->modelo;
	}

	public function setModelo($modelo){
		$this->modelo = $modelo;
	}

	public function getMotor(){
		return $this->motor;
	}

	public function setMotor($motor){
		$this->motor = $motor;
	}

	// em getAno() foi acrescentado :int depois do método 
	// para retornar sempre um int ao invés de string
	public function getAno():int{
		return $this->ano;
	}

	public function setAno($ano){
		$this->ano = $ano;
	}

	// Métodos da Classe Carro
	public function exibir(){

		return array(
			'modelo'=>$this->getModelo(),
			'motor'=>$this->getMotor(),
			'ano'=>$this->getAno()
		);
	}
}

$gol = new Carro();
$gol ->setModelo("Gol GT");
$gol ->setMotor("1.6");
$gol ->setAno("1997");

var_dump($gol->exibir());

?>