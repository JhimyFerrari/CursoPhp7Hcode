<?php
//include "inc/e01.php";


//não pode ter o require de um arquivo mais de 1 vez, caso ocorra dá erro fatal, logo existe o require_once, o qual chama apenas uma vez, e caso seja chamado outra, ele simplesmente ignora e roda normal
require_once "inc/e01.php";
//require "inc/e01.php";




//Qual a diferença entre include e require?
/*
require :
obriga o arquivo existir e estar funcionando corretamente
caso não, gera um erro fatal. Mas pode ser contornado com o trycatch


include:
tenta funcionar mesmo se não existir o arquivo ou estiver com erro
Tem mais recursos: include path


mas, caso não seja usado o include path, é aconselhado utilizar o REQUIRE
e também existe o include remoto, que ele inclui arquivos de dominios externos, dando uma brecha de segurança
*/


$resultado = soma (10,20);
echo $resultado;
