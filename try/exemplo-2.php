<?php


function trataNome($nome){

	if(!$nome){
		throw new Exception("Nenhum nome informado", 200);
	}

	echo "O primeiro nome informado : ".ucfirst($nome)."<br>";
}

try{
// Primeiro acesso a funcao com passagem de parametro correta
	trataNome("Sombra");
// Segundo acesso sem passagem de parametro gerando um erro!
	trataNome("");

}catch(Exception $e){

	echo $e->getMessage()."<br>";
	echo "Código do erro: ".$e->getCode()."<br>";
}finally{

// Bloco finally sempre executado 
	echo "Executou o Try!";
}

?>