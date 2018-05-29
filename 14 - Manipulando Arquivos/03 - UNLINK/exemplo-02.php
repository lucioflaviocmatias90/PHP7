<?php 

// verifica se existe a pasta "images"
if (!is_dir("images")) mkdir("images");

// escaneia cada arquivo na pasta "images" e
// cria um objeto $item para cada arquivo
foreach (scandir("images") as $item) {
	
	if (!in_array($item, array(".", ".."))) {
		
		// é excluido cada arquivo contido na pasta "images"
		unlink("images/" .$item);
	}
}

echo "OK!";

?>