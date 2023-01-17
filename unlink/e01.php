<?php


$file = fopen("teste.txt", "w+");

fclose($file);

//Unlink apaga o arquivo
unlink("teste.txt");

echo "arquivo removido com sucesso";


?>