<?php

//for each  -----> para cada

$meses = array(
    "Janeiro", "Fevereiro","Março",
    "Abril","Maio","Junho",
    "Julho","Agosto","Setembro","Outubro","Novembro","Dezembro"
);

//para cada em($variavel /como/ $item){}

//para cada em($varival /como/ $indexDaArray => $item){}


foreach ($meses as $index =>$mes) {

    echo "Indice: " . $index . "<br>";
    echo "o mês é : ".$mes . "<br><br>";
    # code...
}