<?php
//try

try{ //tenta
    throw new Exception("Houve um erro", 400); //estouro de erro
    

//por convernsão se usa essa variavel $e
} catch(Exception $e ){ //se falhar o try, aja assim
    echo json_encode(
        array(
            "message" => $e->getMessage(),
            "line" => $e->getLine(),
            "file" => $e->getFile(),
            "code"=>$e->getCode()
        )
    );

}


?>