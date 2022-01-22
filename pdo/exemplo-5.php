<?php
//PDO é a maneira mais atual de conectar / trabalha com bd;
$conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "");
$stmt = $conn->prepare("DELETE FROM tb_usuarios  WHERE idusuario = :ID");
$id = "1";
// associar os valores as variaveis 
$stmt->bindParam(":ID",$id);
$stmt->execute();

echo "Excluido com sucesso!";
?>