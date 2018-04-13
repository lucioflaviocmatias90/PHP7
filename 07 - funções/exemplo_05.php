<?php 

// Passagem de paramêtro por valor

$a = 10;

function trocaValor($b){

	$b += 50;

	return $b;

}

// imprime 60
echo "a = ". trocaValor($a);

echo "<br>";

// imprime 10
echo "a = ". $a;

?>