<?php 

require_once("config.php");

// $sql = new Sql();

// $usuarios = $sql->select("SELECT * FROM tb_usuarios");

// echo "<pre>" .json_encode($usuarios). "</pre>";


echo "Carrega apenas um usuário com o ID = 3<br>";

echo "=========================<br>";

$root = new Usuario();

$root->loadById(3);

echo $root;




echo "<br><br><br><br>Carrega uma lista de usuários<br>";

echo "=========================<br>";

$lista = Usuario::getList();

echo json_encode($lista);




echo "<br><br><br><br>Busca o nome do usuario 'jo'<br>";

echo "=========================<br>";

$search = Usuario::search("jo");

echo json_encode($search);




echo "<br><br><br><br>Carrega um usuário usando login e a senha<br>";

echo "=========================<br>";

$usuario = new Usuario();

$usuario->login("victor", "meutenis");

echo $usuario;

?>