<?php
//Criptografia
//mcrypt_encrypt

$data = [
    "nome"=>"Hcode"
];
                //pack converta uma string em 16bits
define('SECRET', pack('a16', 'senha')); //a senha não pode ser vazada, pois com ela é decodificado

/*  mcrypt_encrypy foi descontinuado

    $mcrypt = mcrypt_encrypt(
    MCRYPT_RIJNDAEL_128,
    SECRET,
    json_encode($data),
    MCRYPT_MODE_ECB
);
*/

?>