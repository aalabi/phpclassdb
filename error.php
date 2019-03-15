<?php
	require_once 'config.php';
	$errorCode = "N0";
	if(isset($_SESSION['error'])){
		$error = $_SESSION['error'].PHP_EOL;
		$errorCode = substr($error, 0, 2);
		unset($_SESSION['error']);
		
		//mail error to developer
	
		//log error
		$file = fopen('error-log.txt', 'a+');
		if($file){
			fputs($file, $error);
			fclose($file);	
		}
	}
	echo "We are sorry an error $errorCode has occurred, our engineer are presently working on it";
