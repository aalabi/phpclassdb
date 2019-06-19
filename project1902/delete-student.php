<?php
	require_once "connection.php";
	require_once 'functions.php';
	
	if(isset($_POST['delete'])){
		$id = $_POST['delete'];		
		$query = "DELETE FROM registration WHERE id='$id'";
	
		if(mysqli_query($connection, $query)){
			$_SESSION['success'] = "01 student has been successfully expelled";
			header("Location: view-students.php");
			exit;
		}
		else {
			goToErrorPage(300, "Query Error ".mysqli_error($connection));
		}
	}	