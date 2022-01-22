<?php

if(isset($_COOKIE["NOME_DO_COOKIE"])){

 // var_dump(json_decode($_COOKIE["NOME_DO_COOKIE"],true ));


// Salvando objeto do tipo json na variavel data, no caso como array devido o true
	$data = json_decode($_COOKIE["NOME_DO_COOKIE"],true );
}
echo json_encode($data);
?>