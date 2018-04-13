<?php 

require_once('config.php');

//vai gerar um novo id de sessão
session_regenerate_id();

echo session_id();

?>