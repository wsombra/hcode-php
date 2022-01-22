<?php 

class Cadastro {

 private $nome;
 private $email;
 private $senha;

//funcao para recuperar o nome no cadastro e convertendo para string
	 public function getNome():string{
	 	return $this->nome;
	 }
	 public function getEmail():string{
	 	return $this->email;
	 }
	 public function getSenha():string{
	 	return $this->senha;
	 }

	 public function setNome($nome){
	 	$this->nome = $nome;
	 }
	 public function setEmail($email){
	 	$this->email = $email;
	 }
	 public function setSenha($senha){
	 	$this->senha = $senha;
	 }


	public function __toString(){
		return json_encode(array(

	        //Padrao chave valor
			"nome"=>$this->getNome(),
			"email"=>$this->getEmail(),
			"senha"=>$this->getSenha()
		));

	}
}

?>