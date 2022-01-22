<?php
//Preparando a conexão;
$conn = new mysqli("localhost", "root", "", "dbphp7");

//Verificar se houver erro na abertura da conexao;
if($conn->connect_error){
	echo " Error".$conn->connecterror;
}


//variavel stmt recebe a conexão + comando a ser executado com o prepare;
$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin , dessenha) VALUES(?,?)");

// para cada valor vamos criar uma variavel
$login = "user";
$senha = "12345";
//bind_param valida o tipo esperao de variavel
$stmt->bind_param("ss",$login,$senha);
//executando o stmt
$stmt->execute();




?>