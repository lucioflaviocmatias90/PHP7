<?php 

require_once("config.php");

/*
$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios");

echo "<pre>" .json_encode($usuarios). "</pre>";

*/

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



/*
echo "<br><br><br><br>Inserindo um usuário usando login e a senha<br>";

echo "=========================<br>";

$aluno = new Usuario();

$aluno->setDeslogin("aluno");
$aluno->setDessenha("@lun0");
$aluno->insert();

echo $aluno;
*/



echo "<br><br><br><br>Atualizando o usuário do ID = 8<br>";

echo "=========================<br>";

$usuario = new Usuario();

$usuario->loadById("8");

$usuario->update("professor", "e234242ws");

echo $usuario;




echo "<br><br><br><br>Deletando o usuário do ID = 10<br>";

echo "=========================<br>";

$usuario = new Usuario();

$usuario->loadById("10");

$usuario->delete();

echo $usuario;


?>