<?php
require_once ("config.php");
session_unset();//apaga todas as variaveis de sessão
echo $_SESSION['nome'];

session_destroy(); //apaga e remove a sessão    