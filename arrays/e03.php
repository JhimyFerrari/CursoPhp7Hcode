<?php
$pessoas = array();

array_push($pessoas, array( //função array_push adiciona um item ao array, no caso, agora estamos colocando um array dentro de um item do array
    "nome" => 'Joao',
    'idade' => 20
));

array_push($pessoas, array( 
    "nome" => 'Marcio',
    'idade' => 25
));

print_r($pessoas);
print_r($pessoas[0]["nome"])
?>