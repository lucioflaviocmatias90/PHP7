<?php 

$dir1 = "folder_01";
$dir2 = "folder_02";

// verifica se as duas pastas já existem
// senão será criadas
if (!is_dir($dir1)) mkdir($dir1);
if (!is_dir($dir2)) mkdir($dir2);

$filename = "README.txt";

// verifica se existe arquivo senão será criado
if (!file_exists($dir1 .DIRECTORY_SEPARATOR. $filename)) {
	
	// cria o arquivo "README.txt"
	$file = fopen($dir1 .DIRECTORY_SEPARATOR. $filename, "w+");

	// escreve por cima do arquivo
	fwrite($file, date("Y-m-d H:i:s"));

	// fecha o arquivo aberto na memória
	fclose($file);
}

// função "rename" irá mover um arquivo para
// para outra pasta, na verdade você estará
// renomeiando o local origem do arquivo para
// o local destino

rename(
	// Oldname ou Local Origem
	$dir1 .DIRECTORY_SEPARATOR. $filename,
	// Newname ou Local Destino
	$dir2 .DIRECTORY_SEPARATOR. $filename
);

echo "Arquivo movido com sucesso!";

?>