<?php
//while 

$condicao = true;
while ($condicao) {
    $numero = rand(1,10); //rand ----> numero aleatório, entre 1 e 10

    if ($numero ===3) {
        echo "treees";
        $condicao = false;

        # code...
    }
    echo $numero ."<br>";

}

?>