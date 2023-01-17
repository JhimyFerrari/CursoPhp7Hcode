<?php
//open ssl
//devolve e recebe json



define('SECRET_IV', pack('a16', 'senha'));
define('SECRET', pack('a16', 'senha'));
;
$data = [
    "nome" => "Hcode"
];

$openssl = openssl_encrypt(
    json_encode($data), //Conteudo
    'AES-128-CBC', //algoritmo, cypher
    SECRET, //passphrase   primeira senha
    0,
    //option
    SECRET_IV, //segunda senha
);
var_dump($openssl);

$string = openssl_decrypt($openssl, 'AES-128-CBC', SECRET, 0, SECRET_IV);
echo "<br>";
var_dump(json_decode($string,true))




?>