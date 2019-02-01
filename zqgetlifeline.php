<?php
	// session_start();
	require_once("core.php");
	require("functions.php");

	if (!isset($_SESSION["access_token"])) {
		header('Location: '.LOGINLINK);
	}

	if (!isset($_SESSION["email"])) {
		add_user();
	}

	
	$life = $_POST['name'];

	$level = getLifeline($life);

	if($level == -1){
		if ($life=="levelskip") {
			echo levelskip();
		}

		if ($life=="firstlast") {
			echo firstlast();
		}

		if ($life=="anslen") {
			echo anslen();
		}
	}else{
		echo "404";
	}
?>
