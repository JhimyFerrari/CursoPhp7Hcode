<?php

$name = "images";

// is_dir ananila se o diretorio existe.  no exemplo está negativado pelo nao
if (!is_dir($name)) {

    //make directory
    //mkdir ------> cria um diretório com o nome ()
    mkdir($name); 
    echo "diretório $name criado com sucesso";
} else {
    echo "já existe o diretório; $name";

    //remove directory
    //rmdir ------> remove um diretório com o nome ()

    rmdir($name);
    echo "<br>";
    echo "$name foi excluido";

}

?>