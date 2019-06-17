<?php
	require_once "connection.php";
	require_once 'functions.php';
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$address = $_POST['address'];
	
	$query = "INSERT INTO registration(name, email, authority, phone, address,  date_registered) 
	VALUES ('$name','$email','client', '$phone','$address', NOW())";
	
	if(mysqli_query($connection, $query)){
		echo "O1 student successfully admitted";
	}
	else {
		goToErrorPage(300, "Query Error ".mysqli_error($connection));
	}
	