<?php

$dir1 = "folder_01";
$dir2 = "folder_02";
$filename = "README.txt";


if(!is_dir($dir1) makdir($dir1));
if(!is_dir($dir2) makdir($dir2));
// Verificando se arquivo existe
if(!file_exists($dir1.DIRECTORY_SEPARATOR.$filename)){

//Criando o arquivo
	$file = fopen($dir1.DIRECTORY_SEPARATOR.f$filename,"w+");
//Escrevendo no arquivo
	$fwrite($file,date("Y-m-d H:i:s"));
//Fechando o arquivo
	fclose($file);
}

rename(
	$dir1.DIRECTORY_SEPARATOR.$filename,
	$dir1.DIRECTORY_SEPARATOR.$ilename
);


?>