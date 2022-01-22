<?php


//Verificando se existe , se negativo criar
$name = "images";

//Se o diretorio não existir..
if(!is_dir($name)){

	mkdir($name);
	echo "Diretorio $name criado com sucesso";
}else{

	echo "Já existe o diretorio $name";
}


?>