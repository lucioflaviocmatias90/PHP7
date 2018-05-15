<?php 

$conn = new mysqli("localhost", "root", "", "dbphp7");

if ($conn->connect_error) {
		
	echo "Erro: " .$conn->mysqli_error;
}

$result = $conn->query("SELECT * FROM tb_usuarios ORDER BY deslogin");

$data = array();

while ($row = $result->fetch_assoc()) {

	// echo "<pre>";
	// print_r($row);
	// echo "</pre>";

	array_push($data, $row);

}

echo "<pre>";
echo json_encode($data);
echo "</pre>";

?>