<?php
//tratamento de error

//ao invés de exibir o erro, executar uma função
function error_handler($code,$message,$file,$line){
    echo json_encode(
        array(
            "code" => $code,
            "message" => $message,
            "file" => $file,
            "line" => $line
        )
    );
}
//define o error handler 
//set_error_handler("nomeFunção)
set_error_handler("error_handler");

$total = 100 / 0;
?>