<?php

function ola(){

    $argumentos = func_get_args();//ela recupera em arrays todos os argumentos que foram passados
    return $argumentos;
}

var_dump( ola("bom dia",1,3.1));