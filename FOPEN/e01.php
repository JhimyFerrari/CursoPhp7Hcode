<?php

//file open(endereço, como quer controlar)
#$file = fopen("log.txt", "w+");

$file = fopen("log.txt", "a+");

//file write(nomeArquivo, qualDadoInserir)
fwrite($file, date("Y/m/d H:i:s"). "\r\n");

//fecha o file write
//file close
fclose($file);


echo "arquivo criado com sucesso"

?>