<?php
//Biblioteca GD
//Permite trabalhar com imagem, fazer imagens, processar imagem


//header(tipo de conteudo)
header("Content-Type:image/png");

//imagecreate cria a tela
$image = imagecreate(256, 256);

//a primeira cor a ser definida é a de fundo
//$black = imagecolorallocate($imagem, cor no padrao RGB)
$black = imagecolorallocate($image, 0, 0, 0);
$red = imagecolorallocate($image, 255, 0, 0);


//escrever algo na imagem
//imagestring($imagem,tamanho font, x, y, "String", $cor)
imagestring($image, 5, 60, 120, "Curso PHP 7", $red);

//cria a imagem png
imagepng($image);

//é necessario fecha-la, destrui-la, para não ficar aberta no php
imagedestroy($image);

?>