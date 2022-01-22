<?php

$file = fopen("log.txt", "a+");
fwrite($file, "informação"."\r\n");
fclose($file);
echo "Arquivo editado com sucesso!";
?>