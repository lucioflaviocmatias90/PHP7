<?php 

// $conn = new PDO("sqlsrv:Database=dbphp7;server=DESKTOP-NK63GKE;ConnectionPooling=0", "DESKTOP-NK63GKE\lucio", "trojanhorse123");

$conn = new PDO("sqlsrv:Database=dbphp7;server=DESKTOP-NK63GKE\sqlexpress; connectionPooling=0","sa","dba");

// $conn = new PDO("sqlsrv:Database=dbphp7;server=localhost\SQLEXPRESS;ConnectionPooling=0", "sa", "dba");

$stmt = $conn->prepare("SELECT * FROM tb_usuarios ORDER BY deslogin;");

$stmt->execute();

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo "<pre>";
echo json_encode($results);
echo "</pre>";



// $dsn = 'dblib:host=localhost;dbname=dbphp7';
// $user = 'sa';
// $password = 'dba';

// try
// {
// 	$pdo_object = new PDO($dsn, $user, $password);
// }
// catch (PDOException $e)
// {
// 	echo 'Connection failed: ' . $e->getMessage();
// }

// $sql = "SELECT * FROM tb_usuarios ORDER BY deslogin;";
// $pdo_statement_object = $pdo_object->prepare($sql);
// $pdo_statement_object->execute();
// // $result = $pdo_statement_object->fetch(PDO::FETCH_ASSOC);
// $result = $pdo_statement_object->fetchAll();

// echo "<pre>";
// print_r($result);
// echo "</pre>";

?>