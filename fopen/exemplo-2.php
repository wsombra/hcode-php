<?php
//Gerando aquivo .csv a partir de uma tabela no banco
//Importando as classes
require_once("config.php");

//Instanciar um objeto do tipo sql
$sql = new Sql();
//Executando a funcao SELECT
$usuarios = $sql->select("SELECT * FROM tb_usuarios ORDER BY deslogin");
$headers = array();
//Forech para pegar os header 
foreach ($usuarios[0] as $key => $value) {
	// Inserir no array headers o valor da key com a primeira em caixa alta 
	array_push($headers, ucfirst($key));
}
//Criando o arquivo
$file  = fopen("usuarios.csv", "w+");
//Escrevendo no arquivo, inserindo o separador "," e quebrando a linha "\r\n"
fwrite($file, implode(",",$headers)."\r\n");

//Foreach para pegar os valores nas colunas 
foreach ($usuarios as $row) {
	$data = array();
	foreach ($row as $key => $value) {
		// inserido no array
		array_push($data, $value);
	}
	fwrite($file, implode(",",$data)."\r\n");
}

fclose($file)
?>