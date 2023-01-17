<?php

$image = imagecreatefromjpeg("certificado.jpg");

$titleColor= imagecolorallocate($image,0,0,0);
$gray = imagecolorallocate($image, 100, 100, 100);

//imagettftext($image,tamanho fonte, angulação,x,y,cor,caminho fonte, "texto");
imagettftext($image, 32, 0,320, 250, $titleColor,"fonts".DIRECTORY_SEPARATOR."Bevan".DIRECTORY_SEPARATOR."Bevan-Regular.ttf", "Certificado");
imagettftext($image, 32, 0,375, 350, $titleColor,"fonts".DIRECTORY_SEPARATOR."Playball".DIRECTORY_SEPARATOR."Playball-Regular.ttf", "Gustavo Nestor");
imagestring($image, 28,440, 390,"Concluido", $titleColor);

header("Content-type:image/jpeg");
imagejpeg($image);
imagedestroy($image);

?>