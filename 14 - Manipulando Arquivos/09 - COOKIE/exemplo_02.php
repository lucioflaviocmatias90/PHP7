<?php 

// esse código iremos recuperar a informação contida
// dentro do cookie que está armazenado em minha máquina

if (isset($_COOKIE["NOME_DO_COOKIE"])) {

	$obj = json_decode($_COOKIE["NOME_DO_COOKIE"]);

	echo $obj->empresa;
}

?>