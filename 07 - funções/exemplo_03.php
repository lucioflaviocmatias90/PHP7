<?php 

// Neste exemplo estamos trabalhando funções com
// parâmetros, portanto há várias maneiras de 
// trabalhar com isso.

function ola($texto = "mundo", $periodo = "Bom dia"){

	return "Ola $texto! $periodo<br>";

}

echo ola();
echo ola("Glaucio", "Boa noite");
echo ola("João");

?>