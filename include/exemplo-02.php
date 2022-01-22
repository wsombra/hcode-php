<?PHP 
// include pode inportar de outros locais e tentar executar mesmo sem a certeza que o códifo esta ok
//include "inc/exemplo-01.php";

// arquivo tem que existir e esta correto , fora disto "erro fatal"
require "inc/exemplo-01.php";

// require_once tras  o arquivo apenas uma vez 
require_once "inc/exemplo-01.php";

$resultado = somar(10,30);
echo $resultado;

?>