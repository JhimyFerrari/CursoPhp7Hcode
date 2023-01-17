<?php
/*Json
Java Script

O formato JSON (JavaScript Object Notation) é um formato aberto usado como alternativa ao XML para a transferência de dados estruturados entre um servidor de Web e uma aplicação Web. Sua lógica de organização tem semelhanças com o XML, mas possui notação diferente.

Está ligado a arrays
Serialização de arrays


*/


$pessoas = array();

array_push($pessoas, array( 
    "nome" => 'Joao',
    'idade' => 20
));

array_push($pessoas, array( 
    "nome" => 'Marcio',
    'idade' => 25
));

echo json_encode($pessoas); //echo da array para json,  json_encode  é array para json

?>