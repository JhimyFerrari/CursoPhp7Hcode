<?php
//criar uma imagem apartir de outra

//image create from    jpeg,png etc]
$image = imagecreatefromjpeg("certificado.jpg");

$titleColor= imagecolorallocate($image,0,0,0);
$gray = imagecolorallocate($image, 100, 100, 100);

imagestring($image, 5, 450, 150, "CERTIFICADO", $titleColor);
imagestring($image, 5, 440, 350, "Gustavo Nestor", $titleColor);
imagestring($image, 3, 440, 370, "Concluido em:".date("d/m/Y"), $titleColor);

header("Content-type:image/jpeg");
imagejpeg($image, "certificado1.jpg");
imagedestroy($image);

?>