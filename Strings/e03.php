<?php
//alteração de letras na variavel

$empresa = "Hcode";

// $variavel = string replace ("busca por","troca por", $variavel);
$empresa = str_replace("e","3",$empresa);
$empresa = str_replace("o","0",$empresa);

echo $empresa;