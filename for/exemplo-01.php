<?PHP 

for($i = 0; $i < 10; $i++){

//se estiver dentro desta condição , não aparece  testando o continue
	if($i>=2 && $i<=4 ) continue;
// se atendar a condição para a execução	
	if($i==8 ) break;
	echo $i;
	echo"<br>";


} 


?>