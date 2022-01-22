<?php
//Preparando a conexão;
$conn = new mysqli("localhost", "root", "", "dbphp7");

//Verificar se houver erro na abertura da conexao;
if($conn->connect_error){
	echo " Error".$conn->connecterror;
}

//realizando uma consulta 
$result = $conn->query("SELECT * FROM tb_usuarios ORDER BY deslogin");

$data = array();

//percorrendo o resultado da consulta
while($row = $result->fetch_assoc()){

//inserir dados em um array
	array_push($data,$row);
      //var_dump($row);
}
   // Criando um json 
echo json_encode($data);

?>