<?php
$dir1 = "folder_01";
$dir2 = "folder_02";

//verifica se existe e cria o diretório
if (!is_dir($dir1))mkdir($dir1);

//verifica se existe e cria o diretório
if(!is_dir($dir2))mkdir($dir2);

$filename = "README.txt";
$link= $dir1.DIRECTORY_SEPARATOR.$filename;
$link2=$dir2.DIRECTORY_SEPARATOR.$filename;

//verifica se o arquivo existe
if(!file_exists($link)){

    $file = fopen($link, "w+");

    fwrite($file, date("d/m/Y H:i:s"));
    fclose($file);
}
//pode renomear ou o nome, ou o caminho
//logo, pode mudar de localização, e mudar de nome

#rename($endereçoOriginal, $novoEndereço)
rename($link, $link2);
echo "arquivo movido com sucesso";

?>