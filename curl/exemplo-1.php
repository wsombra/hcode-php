<?php

$cep = "60831496";
$link = "https://viacep.com.br/ws/$cep/json/";

// Inicializando a biblioteca curl
$ch = curl_init($link);

//Aguardando retorno
curl_setopt($ch,CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch,CURLOPT_SSL_VERIFYPEER, 0);

// Executando e armazenando o resultado do tipo json
$response = curl_exec($ch);
// Fechando a conexão
curl_close($ch);
// Decodificando o json, "true para virar array e não objeto"

$data = json_decode($response,true); 

// print_r para imprimir o array
print_r($data);
?>