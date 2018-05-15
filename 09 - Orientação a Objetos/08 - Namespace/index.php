<?php 

require_once("config.php");

use Cliente\Cadastro;

// var_dump(require_once("config.php"));

$cad = new Cadastro();

$cad->setNome("Djalma Sindeaux");
$cad->setEmail("djalma@hcode.com.br");
$cad->setSenha("123456");

$cad->registrarVenda();

?>