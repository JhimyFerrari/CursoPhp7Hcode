<?php

$link = "https://www.google.com.br/images/branding/googlelogo/2x/googlelogo_color_160x56dp.png";

//pega o conteudo de arquivos
$content = file_get_contents($link); //pega conteudo do arquivo, e devolve string

$parse = parse_url($link); //converte link em componentes [array]
$basename=basename($parse["path"]); //retorna o basename do path


$file = fopen($basename, "w+"); //cria um arquivo com nome $basename, com o w+
fwrite($file, $content); //escreve no $file, o $content

fclose($file); //fecha o arquivo


?>

<img src="<?=$basename?>">