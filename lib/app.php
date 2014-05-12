<?php

// calling the stylesheet automatically
$themedirectory = $_SERVER['REQUEST_URI'] . "frontend/css/style.css";
$themedirectory = "<link rel='stylesheet' type='text/css' href='" . $themedirectory . "'.css/style.css'>";


function headline(){
	$file = __DIR__ . "/.." . "/options/headline.txt";
	// echo $file;
	if (file_exists($file)) {
		$headline = file_get_contents($file);
		echo stripcslashes($headline);
	}
}

function email(){
	$file = __DIR__ . "/.." . "/options/email.txt";
	// echo $file;
	if (file_exists($file)) {
		$headline = file_get_contents($file);
		echo "<a class='contact' href='mailto:" . stripcslashes($headline) . "' > Contact </a>";
	}
}


// grab images from assets folder.
$dir = __DIR__ . "/.." . "/assets/";

$folder = scandir($dir);
// print_r($folder);
if (isset($folder)){
	foreach ($folder as $file) {
	// put images in array for frontpage.
		if (preg_match('/(.jpg|.png|.gif)/i', $file)) {
			$pictures[] = array(
				'src' => $_SERVER['REQUEST_URI'] . "assets/" . $file,
				'link' => $_SERVER['REQUEST_URI'] . "assets/" . $file
				);
		}
	}
}

include __DIR__ . "/.." . '/frontend/index.html.php';

?>