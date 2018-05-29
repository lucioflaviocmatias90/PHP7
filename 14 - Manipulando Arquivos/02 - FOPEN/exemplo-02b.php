<?php 

require_once("config.php");

$sql = new Sql;

$usuarios = $sql->select("SELECT * FROM tb_usuarios ORDER BY idusuario");

$headers = array();

foreach ($usuarios[0] as $key => $value) {
	
	array_push($headers, ucfirst($key));
}

echo "<pre>";
print_r($headers);
echo "</pre>";

?>