<?php

$link = "C:xampp\htdocs\upload\upload\QR_GUEST.jpeg";

$content = file_get_contents($link);

$parse = parse_url($link);

$basename = basename($parse["path"]);

$file = fopen($basename, "w+");

fwrite($file,$content);

fclose($file);
// var_dump(bas$parse);
?>

<img src="<?=$basename?>">