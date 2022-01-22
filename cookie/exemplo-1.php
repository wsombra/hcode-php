<?php

$data = array(

	"Empresa"=>"HCode Treinamentos",
	"Usuario"=>"wsombra"

);

setcookie("NOME_DO_COOKIE",json_encode($data), time() + 36000);

?>