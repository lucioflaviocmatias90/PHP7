<?php 

$cep = "15044680";
$link = "https://viacep.com.br/ws/$cep/json/";

$ch = curl_init($link);

// opções do cURL, o valor pode ser "0" ou "1"
// que seria "false" ou "true", para saber se 
// haverá um retorno
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
// validação SSL
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

// resposta da execução cURL
$response = curl_exec($ch);

// fecha a conexão da execução
curl_close($ch);

// converter o objeto JSON em um ARRAY
$data = json_decode($response, true);

// vamos printar o ARRAY
echo "<pre>";
print_r($data);
echo "</pre><br><br>";

echo $data['localidade'];

?>