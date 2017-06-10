<?php


	$im = imagecreatefromstring($obrazek);
	if ($im !== false) {
		header('Content-Type: image/png');
		imagepng($im);
		imagedestroy($im);
		
	}
	else {
		echo "blad przy tworzeniu";
	}
	
}

?>