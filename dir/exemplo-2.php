<?php


//Percorendo um diretorio com a funcao scandir que retorna um array
$images = scandir("images");
//var_dump($images);

//array para armazenar 
$data = array();

//Foreach percorrendo o array populado com a funcao scandir e inserindo as informacoes no arra $img
foreach ($images as $img) {
	// if para excluir "." e ".." que vem no array imq
	if(!in_array($img, array(".", ".."))){
		$filename = "images".DIRECTORY_SEPARATOR.$img;
		//Caminho completo
		$info = pathinfo($filename);
		$info["size"] = filesize($filename);
		$info["modified"] = date("d/m/Y H:i:s", filemtime($filename));
		$info["url"] = "http://localhost/dir/".str_replace("\\", "/", $filename);

		//inserindo dados do array info para o array data
		array_push($data, $info);
	}
}
// Apresentando o array $data
echo json_encode($data);

?>