<?php
//uma função retorna algo, se não retornar é uma sub-rotina

// function nomefunção(parametros){
//codigo
//}

function ola(){  //esse exemplo, é uma sub-rotina, por não retorna
echo "ola mundo";
}

function ola1(){ //esse exemplo é uma função propriamente dita, por retorna algo
return "ola mundo";
}


ola();
echo "<br>";
$frase = ola1();

echo strlen($frase);