<?php

$a = NULL;
$b = NULL;
$c= 10


//verifica de a variavel e nula 
echo $a ?? $b ?? $c;



// tres === compara valor
var_dump($a == $b);
echo "<br/>";

// tres === compara valor e tipo iguadade de identidade 

var_dump($a === $b);
echo "<br/>";

var_dump($a != $b);
echo "<br/>";

var_dump($a !== $b);
echo "<br/>";



?>