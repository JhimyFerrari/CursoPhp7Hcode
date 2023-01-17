<?php
//renderização de imagem em base64

$filename = "php.png";

 //file_get_contents lê o conteudo de um arquivo, lê inteiro
 //mas retorna em binario
 //base64_encode transforma binario em string
$base64 =base64_encode( file_get_contents($filename));

//classe finfo
//com metodo construdor sendo informado a constante que retorna o tipo da mime do arquivo
$fileinfo = new finfo(FILEINFO_MIME_TYPE); 

// ->file($filename) retorna informações do arquivo
$mimetype = $fileinfo->file($filename);

$base64encode= "data:$mimetype;base64," . $base64;

?>

<a href="<?=$base64encode?>" target="_blank"> Link Imagem </a>

<img src="<?=$base64encode?>">