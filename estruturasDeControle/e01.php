<?php
$qualsuaidade =67;

$idadeCrianca = 12;
$idademaior=18;
$idadeidoso=65;

if ($qualsuaidade<=$idadeCrianca) {
    echo "Criança";
    # code...
} else if($qualsuaidade<$idademaior){
    echo "adolescente";
} elseif ($qualsuaidade <$idadeidoso) {
    # code...
    echo "adulto";
} else {
    echo "idoso";
}

echo "<br>";

//função ternária

// ? ---> então,   : ------> se não
// (condição)?"resposta 1":"resposta 2";
echo ($qualsuaidade < $idademaior)?"Menor de Idade":"Maior de idade";

?>