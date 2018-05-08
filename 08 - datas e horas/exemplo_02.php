<?php 



// Data de 01/09/2001

$ts = strtotime("2001-09-01");

echo date("l, d/m/Y", $ts) ." - Data de 01/09/2001";

echo "<br>";



// Data de Hoje

$ts = strtotime("now");

echo date("l, d/m/Y", $ts) ." - <b>Data de Hoje</b>";

echo "<br>";



// Data de Amanhã (somando +dia)

$ts = strtotime("+1 day");

echo date("l, d/m/Y", $ts) ." - Data de Amanhã";

echo "<br>";



// Data de uma Semana (somando +semana)

$ts = strtotime("+1 week");

echo date("l, d/m/Y", $ts) ." - <b>Data de uma semana depois</b>";

?>