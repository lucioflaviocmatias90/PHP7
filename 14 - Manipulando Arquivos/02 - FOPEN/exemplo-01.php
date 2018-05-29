<?php 

// w+ vai escrever informações no arquivo
// $file = fopen("log.txt", "w+");

$file = fopen("log.txt", "a+");

fwrite($file, date("Y-m-d H:i:s") ."\r\n");

fclose($file);

echo "Arquivo criado com sucesso";

?>