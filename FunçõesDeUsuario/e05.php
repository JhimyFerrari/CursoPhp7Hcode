<?php
//parametros por valor x referencia
$a =10;

function trocaValor($a){
    $a += 50;
    return $a;
}

echo trocaValor($a);
echo "<br>";  //não são o mesmo $a
echo $a;   
trocaValor1($a);
function trocaValor1(&$e){ //passagem de valor por referencia, o que acontece aqui, muda a variavel. Agora são o mesmo $a, com o & foi passado o endereço dela
    $e += 50;
    return $e;
}
echo "<br>";
echo $a;