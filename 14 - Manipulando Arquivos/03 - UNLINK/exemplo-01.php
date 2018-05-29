<?php 

$file = fopen("teste.txt", "w+");

fclose($file);

// comando para remover um arquivo
unlink("teste.txt");

echo "Arquivo removido com sucesso!";

?>