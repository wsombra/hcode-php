<?php

$nome = "Washington";
$sobrenome = "Sombra";
//." ". para concatenar
$nomeCompleto = $nome." ".$sobrenome 
echo"$nome";
echo "<br/>";

//unset apaga a variável

unset($nome);

//if para verificar se a variavel existe

if(isset($nome)){
echo "exite a variavel nome ";
}else{
	echo "não exite a variavel nome";
}
?>