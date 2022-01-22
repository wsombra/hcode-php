<?PHP 

$qualAsuaIdade = 10;
$idadeCrianca = 12;
$idadeAdulto = 	18;
$idadeSenior = 65;


if ($qualAsuaIdade < $idadeCrianca){

	echo "Criança";

}else if ($qualAsuaIdade < $idadeAdulto){

	echo "Adolecente";

}else if ($qualAsuaIdade < $idadeSenior){

	echo "Adulto";
}else {

	echo "Idade Senior";
}


echo "<br/>";

//Forma simples de validar com uma linha "TERNARIO" ? = então, : = senão
echo ($qualAsuaIdade < $idadeAdulto)? "Menor de idade":"Maior de idade ";
?>