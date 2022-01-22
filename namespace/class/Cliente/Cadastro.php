<?php 


//namespace (diretorio)informando que deve herdar do cadastro
namespace Cliente;


class Cadastro extends \Cadastro{


public function registrarVenda(){

	echo "Foi registrada a venda para o cliente ".$this->getNome();
}



}



?>