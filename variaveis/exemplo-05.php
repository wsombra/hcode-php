<?php

// variavei pre-definidas / arrays super globais
/* sempre serebo como string, tenho que converter , no caso convertendo para numeros*/

$nome = (int)$_GET["a"];

echo "<br/>";

$ip = $_SERVER["REMOTE_ADDR"];
 
echo $ip;



// var_dump para mostrar o tipo de dado
var_dump($nome);

?>