<?php

function trataNome($name){
    if (!$name) {
        # code...

        throw new Exception("Nenhum nome foi informado", 1);
        
    }

    echo ucfirst($name) . "<br>";
}

try {
    trataNome("Joao");
    trataNome("");
} catch (Exception $e) {
    echo $e->getMessage();
} finally{  //independente de executar o try ou o catch, vai executar o finally por ultimo
    echo "<br> Executou o Try";
}



?>