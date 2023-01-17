<?php
////operadores relacionais
$a = 30;

$b = 55;

$c = 55.0;
 
// o var_dump vai exibir se o booleano é verdadeiro ou falso

var_dump($a > $b); //maior que

echo "<br>";

var_dump($a < $b); //menor que

echo "<br>";

////////// igualdade

var_dump($a == $b); // comparação de valor
echo "<br>";

var_dump($b == $c);
echo "<br>";

var_dump($b === $c); //compara a identidade e o valor
echo "<br>";


////diferente

var_dump($b != $c); 
echo "<br>";

var_dump($b !== $c); //compara a identidade e o valor
echo "<br>";



?>