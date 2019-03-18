<?php
	$title = "Customer Created";
	require_once "./template/header.php";
	require_once "./template/meun.php";
	require_once 'connection.php';

	$name = $_POST['name'];
	$address = $_POST['address'];
	$city = $_POST['city'];
	$state = $_POST['state'];
	$zip = $_POST['zip'];

	$query = "INSERT INTO customers (name, address, city, state, zip) VALUES ('$name', '$address', '$city', '$state', '$zip')";
	$result = mysqli_query($connection, $query);
	if($result){
		echo "Customer Created successfully.";
	}
	else {
			errorMove("D3 ".mysqli_error($connection)." in file ".__FILE__." at line ".__LINE__);
	}
?>
