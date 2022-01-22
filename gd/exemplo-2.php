<?php
$image = imagecreatefromjpeg("certificado.jpg");
$tittleColor = imagecolorallocate($image, 0,0,0 );
$gray = imagecolorallocate($image, 100, 100, 100);

imagestring($image, 5, 450,150, "CERTIFICADO", $tittleColor);
imagestring($image, 5, 440,350, "Carlos Eduardo", $tittleColor);
imagestring($image, 5, 440,370, utf8_decode("Concluido em ").date("d/m/Y"),$tittleColor);

header("Content-Type : image/jpeg");

imagejpeg($image, "certificado-".date("Y-m-d").".jpg");
imagedestroy($image);
?>