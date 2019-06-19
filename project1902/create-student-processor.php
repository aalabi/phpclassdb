<?php
	require_once "connection.php";
	require_once 'functions.php';
	
	if(isset($_POST['create']) && $_POST['create'] == 'create'){
		//data validation
		if(empty($_POST['name'])){
			$error[] = "Name is required";
		}
		else {
			$name = $_POST['name'];
		}
		
		if(empty($_POST['email'])){
			$error[] = "Email is required";
		}
		else {
			$email = $_POST['email'];
		}
		
		if(empty($_POST['phone'])){
			$error[] = "Phone is required";
		}
		else {
			$phone = $_POST['phone'];
		}
		
		if(empty($_POST['address'])){
			$error[] = "Address is required";
		}
		else {
			$address = $_POST['address'];
		}
		
		$gender = $_POST['gender'];
		
		//redirect if data validation fails
		if(isset($error)){
			$_SESSION['dataError'] = $error;
			header("Location: create-student.php");
			exit;
		}
		
	}
	
	$password = "";
	for ($i=1; $i < 9 ; $i++) { 
		$password .=chr(rand(65, 90));
	}
	$sentPassword = $password;
	$password = md5($password);
	
	$query = "INSERT INTO registration(name, email, authority, phone, address, gender, passport, password, date_registered) 
	VALUES ('$name','$email','student', '$phone','$address', '$gender', '$gender.jpg', '$password', NOW())";
	
	if(mysqli_query($connection, $query)){
		
		$seenPassword = $sentPassword;
		if(!DEVELOPMENT){
			mail($email, 'Admission to Alabian Academy', "Password: $sentPassword");
			$seenPassword = "";
		}
		
		$_SESSION['success'] = "01 student has been successfully admitted $seenPassword";
		header("Location: create-student.php");
		exit;
	}
	else {
		goToErrorPage(300, "Query Error ".mysqli_error($connection));
	}
	