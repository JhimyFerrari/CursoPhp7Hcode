<?php
require_once("config.php");

//para usar o nomeSpace
//use NameSpace\NomeArquivo
use Cliente\Cadastro; 

$cad = new Cadastro();
$cad->setNome("Djalma Sindeaux");
$cad->setEmail("djalma@gmail.com");
$cad->setSenha("123456789");

$cad->registrarVenda();



?>