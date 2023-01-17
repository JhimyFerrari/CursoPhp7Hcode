<?php
//String maiusculo e minusculo
$nome = "joao rangel";
$nome2="JOAO";

echo strtoupper($nome); // Função strtoupper converte tudo em maiusculo
// str --> String   to --->para   upper--> uppercase 

echo "<br>";

echo strtolower($nome); // Função strtolower converte tudo em minusculo
// str ---> String   to ------> para    lower------> lowercase

echo "<br>";

echo ucwords($nome); // Função ucwords converte as primeiras letras das palavras para maiusculo

echo "<br>";

echo ucfirst($nome); //Função ucfirst converte a primeira letra em maisculo

