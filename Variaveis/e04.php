<?php
/*variaveis pre definidas [superglobal]
informações externas
informações do ambiente 
*/

//$nome = $_GET["a"]; //todo valor vindo de GET é STRING, logo é necessario fazer uma conversão, um cast
$nome = (int)$_GET["a"]; //cast para int
//var_dump($nome);

//$idade = (int)$_GET["b"];
//var_dump($idade);


//$_server pega informações do servidor
//$ip = $_SERVER["REMOTE_ADDR"]; //pega o ip do usuario 

$ip = $_SERVER["SCRIPT_NAME"]; //pega o nomo do arquivo
echo $ip;
?>