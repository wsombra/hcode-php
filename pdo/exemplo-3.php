<?php
//PDO é a maneira mais atual de conectar / trabalha com bd;
$conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "");
$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin , dessenha) VALUES(:LOGIN, :PASSWORD)");
$login = "jose";
$password = "12345678";
// associar os valores as variaveis 
$stmt->bindParam(":LOGIN",$login);
$stmt->bindParam(":PASSWORD",$password);
$stmt->execute();

echo "Inserido com sucesso!";

?>