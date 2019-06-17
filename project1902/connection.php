<?php
	require_once 'config.php';
	require_once 'functions.php';
	$connection = mysqli_connect(SERVER, USER, PASSWORD);
	if($connection){
		if(!mysqli_select_db($connection, DB)){
			goToErrorPage(200, "Db selection failed ". mysqli_error($connection));
		// 1	$error[200] = "Db selection failed ". mysqli_error($connection);
		// 2	$_SESSION['error'] = $error;
		// 3	header("Location: error.php");
		// 4	exit;
		}
	}
	else{
		goToErrorPage(200, "Db Server down ". mysqli_error($connection));
	// 1	$error[100] = "Db Server down ". mysqli_error($connection);
	// 2	$_SESSION['error'] = $error;
	// 3	header("Location: error.php");
	// 4	exit;
	}