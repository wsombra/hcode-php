<?php 

$name = 'Hcode Treinamentos';
 
$replace = 'Cursos';

/*
// retirou o T da frase e inseriu a palavra Curso...
$new_name = str_replace('T', $replace, $name);

echo $new_name
*/
echo "<br/>";

// substr verificou a frase partido o 0 até a palatra que começa com T, para para no T necessita do strpos que identifiou o T na frese e finalmente concatenou com o conteudo da variavel $repalce, 
$new_name = substr($name, 0 , strpos($name, 'T')) . $replace;

echo $new_name



?>