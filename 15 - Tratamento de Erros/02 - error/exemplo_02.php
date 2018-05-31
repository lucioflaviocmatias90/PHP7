<?php 

// irá negar todos os tipos de error's, notice's 
// e warning's
error_reporting(E_ALL & ~E_NOTICE);

$nome = $_GET["nome"];

// deveria imprimir um erro, porque a variavel
// global "$_GET" não recebeu nenhuma string
echo $nome;

?>