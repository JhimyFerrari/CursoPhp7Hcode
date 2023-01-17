<?php
//diminuindo tamanho de uma imagem


header("Content-type: image/jpeg");

$file = "wallpaper.jpg";
$new_width = 256;
$new_height = 256;

//list lista uma array
list($width, $height) = getimagesize($file);

$new_image = imagecreatetruecolor($new_width, $new_height);
$old_image = imagecreatefromjpeg($file);

imagecopyresampled($new_image,$old_image,0,0,0,0,$new_width,$new_height,$width,$height);

imagejpeg($new_image);

imagedestroy($old_image);
imagedestroy($new_image);

?>