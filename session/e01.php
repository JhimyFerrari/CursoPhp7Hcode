<?php
//variaveis de sessoes
/*
se assemelham a variaveis superglobais
enquanto a sessão está ativa


Quando o usuario entra num site, é criado um arquivo de texto, o qual é a sessão

É estipulado o tempo de cada sessão, quanto a inatividade principalmente

*/
session_start(); //inicia as sessoes nessa pagina, pra toda pagina que vai ter sessão, precisa iniciar
//no entanto é possivel mudar para automático nas configurações

//Para otimizar, é criado o config.php, para lá inicar a sessão

$_SESSION["nome"] = "Hcode"; //cria a sessão

?>