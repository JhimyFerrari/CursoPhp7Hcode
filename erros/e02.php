<?php
//altera o phpini pelo php
//o ~ é igual a !
error_reporting(E_ALL & ~E_WARNING);

$nome = $_GET["nome"];

echo $nome;


?>