<?php
//classe Datetime

$dt = new DateTime();

$periodo = new DateInterval("P15D"); //criando um intervano de datas

echo $dt->format("d/m/Y H:i:s");

$dt->add($periodo);//adiciona uma data

echo "<br>";
echo $dt->format("d/m/Y H:i:s")  // -> para acessar um metódo da Classe

?>