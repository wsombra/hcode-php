<?php 
//Carrando o arquivo config.php que possui o autoload de classes.
require_once("config.php");

//resurso "use" modifica a utilização de uma nova classe

use Cliente\Cadastro;

//Cadastro "originalmente utilizado aqui esta na pasta class"
$cad = new Cadastro();

$cad->setNome("Washington Sombra");
$cad->setEmail("wsombra@startectelecom.com.br");
$cad->setSenha("654321");

//echo $cad;

// função  registrarVenda() da classe Cadastro em Cliente\Cadastro
$cad->registrarVenda();
?>