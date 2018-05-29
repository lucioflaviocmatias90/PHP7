<?php 

$name = "images";

if (!is_dir($name)) {
	
	// mkdir irá criar um diretório
	mkdir($name);

	echo "Diretório " .$name. " criado com sucesso!";

} else {

	// verifica se o diretório já existe então é excluido
	rmdir($name);
	echo "Já existe o diretório: " .$name;
}


?>