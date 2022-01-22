<?php
//PDO é a maneira mais atual de conectar / trabalha com bd;
$conn = new PDO("sqlsrv:Database=dbphp7;server=localhost\SQLEXPRESS;ConnectionPooling=0", "sa", "root");
$stmt = $conn->prepare("SELECT * FROM tb_usuarios ORDER BY deslogin");
$stmt->execute();

//   resulta armazenando  APENAS OS DADOS ASSOCIADOS "PDO::FETCH_ASSOC"
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

//var_dump($results);
//foreach para iterar..
/*
foreach ($results as $row) {
	foreach ($row as $key => $value) {
	echo $key." ".$value."<br>";
	}
}
*/


// Criando um json 
echo json_encode($results);

?>