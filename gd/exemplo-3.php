<?php
$image = imagecreatefromjpeg("certificado.jpg");
$tittleColor = imagecolorallocate($image, 0,0,0 );
$gray = imagecolorallocate($image, 100, 100, 100);

imagettftext($image, 32, 0, 320 ,250,$tittleColor, "fonts".DIRECTORY_SEPARATOR."Bevan".DIRECTORY_SEPARATOR."Bevan-Regular.ttf","CERTIFICADO");

imagestring($image, 32, 0, 375,350,$tittleColor, "fonts".DIRECTORY_SEPARATOR."Playball".DIRECTORY_SEPARATOR."Playball-Regular.ttf" "Carlos Eduardo");
imagestring($image, 3, 440,370, utf8_decode("Concluido em ").date("d/m/Y"),$tittleColor);

header("Content-Type : image/jpeg");

imagejpeg($image, "certificado-".date("Y-m-d").".jpg");
imagedestroy($image);
?>