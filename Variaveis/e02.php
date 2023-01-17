<?php
//Regras de nomes
$anoNascimento=1990;
$nomeInteiro; //camelcase
$nome2= "Joao"; //variavel com numero
$nome_completo="Rafael"; //variavel com _

echo $nome2;
/*nomes reservados
$this;
$_POST;
$_SERVER;
*/


//apagar variavel
unset($nome2,$nomeCompleto);

if (isset($nome2)) { //isset verifica se ela existe
    //echo $nome2;
   
}

//contatenar
$nome3="Jhimy";
$nome4="Kenedy";
$nomeCompleto=$nome3 . " ". $nome4;

echo $nomeCompleto;

exit; //para a exução do codigo,independente de onde estiver



?>