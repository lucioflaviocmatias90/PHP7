<?php 

// iremos criar um COOKIE em nossa máquina, após
// o código executado, pressione F12 no brownser 
// Google Chrome e vá para "Applications/Cookies" 
// e lá vai estar o nosso cookie criado pelo código PHP

$data = array(
	'empresa' => 'HCODE' 
);

setcookie("NOME_DO_COOKIE", json_encode($data), time() + 3600);

echo "OK";

?>