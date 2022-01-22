<?php
//PDO é a maneira mais atual de conectar / trabalha com bd;
$conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "");
//abrindo transação

$conn->beginTransaction();
$stmt = $conn->prepare("DELETE FROM tb_usuarios  WHERE idusuario = ?");
$id = "2";
// associar os valores as variaveis 
//$stmt->bindParam(":ID",$id);

//outra forma
$stmt->execute(array($id));
//cancela
$conn->rollback();

//confima 
//$conn->commit();

echo "rollback!";
?>