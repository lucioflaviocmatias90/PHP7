<?php 

/* Interface é como um contrato, tudo o que estiver dentro da classe interface então o codigo é obrigatório, as classes devem obedecer as regras descritas na classe interface, isso ajuda na
organização do projeto, havendo uma padronização no projeto
*/
interface Veiculo{

	public function acelerar($velocidade);
	public function freiar($velocidade);
	public function trocarMarcha($marcha);

}

class Civic implements Veiculo
{
	public function acelerar($velocidade){

		echo "O veículo acelerou até " .$velocidade. " km/h";

	}

	public function freiar($velocidade){

		echo "O veículo freiou até " .$velocidade. " km/h";

	}

	public function trocarMarcha($marcha){

		echo "O veículo engatou a marcha " .$marcha;
	}
}

$carro = new Civic();

$carro->acelerar(20);
echo "<br>";

$carro->freiar(15);
echo "<br>";

$carro->trocarMarcha(2);
echo "<br>";

?>