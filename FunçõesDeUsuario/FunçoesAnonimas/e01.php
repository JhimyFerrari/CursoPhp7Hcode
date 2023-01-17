<?php
//funções anonimas são funções sem nome e sem return

function test($callback/* $callback é o nome utilizado para processos mais demorados*/ ){
    //processo lento

    $callback();//o  $callback virou uma função

}


test(function(){ //o test chama uma função
    echo "terminou";
});