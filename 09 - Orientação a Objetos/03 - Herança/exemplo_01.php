<?php 

/* Na POO, a herança sempre herda seus atributos e métodos,
	mas apenas classe filho tem acesso aos atributos e métodos
	da classe pai, a classe pai não tem acesso à classe filho
*/
class Documento{

	// Atributos
	private $numero;

	// Getter e Setter
	public function getNumero(){
		return $this->numero;
	}

	public function setNumero($n){
		$this->numero = $n;
	}
}

class CPF extends Documento{
	
	// Métodos
	public function validar():bool{

		$numeroCPF = $this->getNumero();
		// Validação do CPF
		return true;
	}

}

$doc = new CPF();

$doc->setNumero("111222333-44");

var_dump($doc->validar());

echo "<br>";

echo $doc->getNumero();

?>