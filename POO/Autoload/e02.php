<?php
//o autoload ele só procura dentro do mesmo diretório

//as funções spl, são conjuntos de funções para preencher lacunas
//Standard PHP Library (SPL)



function incluirClasses($nomeClasse){
        //file_exists verifica se o arquivo existe
    if (file_exists("$nomeClasse.php") === true) {
        require_once("$nomeClasse.php");
    }
}
spl_autoload_register("incluirClasses"); // Registra a função dada como implementação de __autoload()
//incluindo as classes da pasta abstrata
spl_autoload_register(function ($nomeClasse) {
                                //Essa constante retorna o separador do SO
    if (file_exists("Abstratas". DIRECTORY_SEPARATOR. "$nomeClasse.php") === true) {
        require_once("Abstratas". DIRECTORY_SEPARATOR. "$nomeClasse.php");
    }
});


$carro = new Delrey;
$carro ->acelerar(80);