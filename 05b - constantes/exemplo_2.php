<?php

//sempre digitar o nome da constante em MAIUSCULO, denominado como "boas práticas"

define("BANCO_DE_DADOS", [
	'127.0.0.1',
	'root',
	'password',
	'testDB']);

echo "<pre>";
print_r(BANCO_DE_DADOS);
echo "</pre>";

?>
