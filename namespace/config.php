<?php 
//Autoload das classes 
// spl para carregar as classes
spl_autoload_register(function($nameClass){

	//Variavel  $dirClass armazenando nome da pasta
	$dirClass = "class";
	//Variavel  $fileName recebe o maminho da classe, DIRECTORY_SEPARATOR modifica a barra de acordo com o S.O. 
	$fileName = $dirClass . DIRECTORY_SEPARATOR . $nameClass . ".php";

	//verificando se aquivo existe

	if(file_exists($fileName)){
       // importando o arquivo 
		require_once($fileName);

	}
  });
?>