<?php

class Usuario{


	private $idusuario;
	private $deslogin;
	private $dessenha;
	private $dtcadastro;


	public function getIdusuario(){
		return $this->idusuario;
	}

	public function setIdusuario($value){
		$this->idusuario = $value;
	}

	public function getDeslogin(){
		return $this->deslogin;
	}

	public function setDeslogin($value){
		$this->deslogin = $value;
	}

	public function getDessenha(){
		return $this->dessenha;
	}
	public function setDessenha($value){
		$this->dessenha = $value;
	}

	public function getDtcadastro(){
		return $this->dtcadastro;
	}

	public function setDtcadastro($value){
		$this->dtcadastro = $value;
	}

// constutor obriga a passagem dos parametros , ="" para não dar erro caso esqueça
	public function __construct($login ="", $password =""){

		$this->setDeslogin($login);
		$this->setDessenha($password);
	}

	public function loadById($id){

		$sql = new Sql();

		$results = $sql->select("SELECT * FROM tb_usuarios WHERE idusuario = :ID", array(
			":ID"=>$id
		));

		if(count($results) > 0){

			$this->setDados($results[0]);

		}
	}
	//metodo estatico (não tem $this),
	public static function getList(){

		$sql = new Sql();

		return $sql->select("SELECT * FROM tb_usuarios ORDER BY deslogin;");

	}
	//pesquisa na base de usuarios
	public static function search($login){

		$sql = new Sql();

		return $sql->select("SELECT * FROM tb_usuarios WHERE deslogin LIKE :SEARCH ORDER BY deslogin",array(
			':SEARCH'=>"%".$login."%"
		));
	}

	//Valida login
	public function login($login, $password){
		
		$sql = new Sql();

		$results = $sql->select("SELECT * FROM tb_usuarios WHERE deslogin = :LOGIN AND dessenha = :PASSWORD", array(
			":LOGIN"=>$login,
			":PASSWORD"=>$password
		));

		if(count($results) > 0){
			$this->setDados($results[0]);
		}else{
			throw new Exception ("Usuário ou password inválidos",1);
		}

	}
   // funcao setDados cria pois este trecho de codigo estava ficando redundante
	public function setDados($dados){

		$this->setIdusuario($dados['idusuario']);
		$this->setDeslogin($dados['deslogin']);
		$this->setDessenha($dados['dessenha']);
		$this->setDtcadastro(new DateTime($dados['dtcadastro']));


	}


// Funcao para inserir usuarios na tabela , utilizando uma procedure sql
	public function insert(){

		$sql = new sql();
		$results = $sql->select("CALL sp_usuarios_insert(:LOGIN, :PASSWORD)",array(
			':LOGIN'=>$this->getDeslogin(),
			':PASSWORD'=>$this->getDessenha()

		));
		if(count($results) > 0){
			$this->setDados($results[0]);
		}

	}


	public function update($login, $password){

		$this->setDeslogin($login);
		$this->setDessenha($password);

		$sql = new Sql();
		$sql->query("UPDATE tb_usuarios SET deslogin = :LOGIN, dessenha = :PASSWORD WHERE idusuario = :ID",array(
			':LOGIN'=>$this->getDeslogin(),
			':PASSWORD'=>$this->getDessenha(),
			'ID'=>$this->getIdusuario()
		));

	}

	public function delete(){

		$sql = new Sql();
		$sql->query("DELETE FROM tb_usuarios WHERE idusuario = :ID",array(
			':ID'=>$this->getIdusuario()

		));

		//apagando dados em memoria
		$this->setIdusuario(0);
		$this->setDeslogin("");
		$this->setDessenha("");
		$this->setDtcadastro(new DateTime());

	}
	//Quando solicito um echo em uma variavel , o metodo __toString e chamado automaticamente retornando um json_enconde imprimindo na tela 
	public function __toString(){

		return json_encode(array(

			"idusuario"=>$this->getIdusuario(),
			"deslogin"=>$this->getDeslogin(),
			"dessenha"=>$this->getDessenha(),
			"dtcadastro"=>$this->getDtcadastro()->format("d/m/Y H:i:s")
		));

	}
}
?>