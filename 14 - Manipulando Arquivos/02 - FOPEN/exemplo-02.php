<?php 

require_once("config.php");

$sql = new Sql;

$usuarios = $sql->select("SELECT * FROM tb_usuarios ORDER BY idusuario");

echo "<pre>";
print_r($usuarios);
echo "</pre>";

?>