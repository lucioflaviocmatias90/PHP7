<?php 

$pessoa = array(
	'nome' => 'João',
	'idade' => 20
);

/* se você colocar & na variável $value no foreach, 
então idade mudará para 30 dentro do array $pessoas,
isso é passagem de parâmetro por referência, pois
você irá mudar o valor de dentro da variável, já a
passagem de parâmetros por valor, é passado somente
o valor da variável na memória sem ela sofrer alteração,
e mudará o seu valor na memória local e permanecerá o 
mesmo valor dentro da variável */  


foreach ($pessoa as $value) {
	
	if (gettype($value) === 'integer') $value += 10; 

	echo $value ."<br>";
	
}

echo "<pre>";
print_r($pessoa);
echo "</pre>";

?>