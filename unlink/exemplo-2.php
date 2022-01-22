<?php

// If verificand a existencia da pasta
if(!is_dir("images")) mkdir("images");

foreach (scandir("images") as $item) {
	if(!in_array($item , array(",",".."))){
		unlink("images/".$item);

	}
}

echo "arquivos removidos da pasta images";

?>