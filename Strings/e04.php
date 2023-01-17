<?php
//String position, Sub String, String lenght

$frase ="A repetição é a mãe da retenção";

$palavra = "mãe";

//position diz a posição do texto dentro da variavel
//$q = string position ($alvo, "busca por");
$q = strpos($frase, $palavra);

var_dump($q);

echo "<br>";


// substr corta a string
//$texto = sub String ($alvo, inicia, vai até)
$texto = substr($frase,0,$q);

var_dump($texto);

echo "<br>";

//String lenght diz qual o tamanho da string
$texto2 = substr($frase, $q + strlen($palavra), strlen($frase));

var_dump($texto2);