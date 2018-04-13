<?php

$json = '[{"nome":"Joao","idade":"20"},{"nome":"Glaucio","idade":"25"}]';

$data = json_decode($json, true);

echo "<pre>";
print_r($data);
echo "</pre>";

// json_decode irá converter o JSON em um array, caso não coloque TRUE então virar um array de objetos

?>