<?php

$pessoa = array(
    'nome'=> 'joao',
    'idade'=>20
);
foreach ($pessoa as &$value) { //agora com o &, o $value está ligado aos valores de $pessoa
    if (gettype($value) === 'integer') $value +=10; //gettype pega o tipo da variavel

    echo $value . '<br>';
    
}

print_r($pessoa);