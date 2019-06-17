<?php 
	function goToErrorPage($code, $msg){
		$error[$code] = $msg;
		$_SESSION['error'] = $error;
		header("Location: error.php");
		exit;
	}