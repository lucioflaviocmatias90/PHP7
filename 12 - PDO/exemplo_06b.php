<?php 

/* 
transação é um processo que, ou tudo dá certo e eu confirmo isso
com o comando "commit" ou tudo dá errado e dou o comando "rollback"
para cancelar, como instituições financeiras
*/

$conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");

$conn->beginTransaction();

$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = ?");

$id = 2;

$stmt->execute(array($id));

// commit vai confirmar(ou autorizar) o DELETE, só 
// verificar no SGBD
$conn->commit();

echo "Excluido OK";

?>