<?php
//algumas novidades de funções do php 7

function soma(int ...$valores):float//tipo do retorno especificado como float
 { 
    return array_sum($valores);
}

var_dump(soma (2,2)) ;
echo "<br>";
echo soma(1,3,4,5,6,7,8,9,10,13,14,16);
echo "<br>";
echo soma(1.5,1.7);