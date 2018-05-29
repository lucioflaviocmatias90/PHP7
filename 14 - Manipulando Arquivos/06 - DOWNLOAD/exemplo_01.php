<?php 

// link da imagem
$link = "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQoU3C7HedWnfxyU9tls1n39JuQ85W7H5p91Pq7-hFoqeZmLjvf";

// pega o conteúdo bruto da imagem
$content = file_get_contents($link);

// converte o conteúdo de uma forma p/ interpretar
$parse = parse_url($link);

// var_dump($parse);

// echo "<br><br>";

$basename = basename($parse["path"]);

$file = fopen($basename, "w+");

fwrite($file, $content);

fclose($file);

?>

<img src="<?=$basename?>">