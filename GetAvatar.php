<?php 
$filename = "avatar1.png";

list($width,$height) = getimagesize($filename);
//skale dodaj
$skala = 250/$width;
$newwidth =  $width * $skala;
$newheight = $height * $skala;


$AVATAR_source = imagecreatefrompng($filename);
$thumb = imagecreatetruecolor($newwidth,$newheight);

imagecopyresized($thumb, $AVATAR_source, 0,0,0,0, $newwidth,$newheight,$width,$height);

header('Content-Type: image/png');
imagepng($thumb);
imagedestroy($thumb);
?>