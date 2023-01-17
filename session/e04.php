<?php

session_id(/*"Id da sessao"*/);//recupera a sessão por meio do Id

require_once("config.php");

session_regenerate_id(); //gera um id novo, recomendado usar no valida.php para assim alternar o id do usuario toda vez que ele logar, assim evitando ataques a conta
echo session_id();

var_dump($_SESSION);