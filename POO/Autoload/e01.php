<?php
//Autoload é uma função que carrega as classes automaticamente, sem precisar de um required_once para cada uma

//atualmente no PHP 8, está em desuso, assim é utilizado o spl_autoload_register
spl_autoload_register(function($class){

    if (file_exists($class.".php")) {
    
    require_once($class.".php");
    
    }
    
    });

$carro = new Delrey;
$carro ->acelerar(80);
?>