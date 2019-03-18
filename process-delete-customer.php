<?php
	$title = "Delete Customer";
	require_once "./template/header.php";
	require_once "./template/meun.php";
    require_once 'connection.php';

    $iNumber = $_POST['id'];


	$query = "DELETE FROM `customers` WHERE id ='$iNumber'";
	$result = mysqli_query($connection, $query);
	if($result){
        echo "Customer Successfully Deleted";
	}
	else {
		errorMove("D3 ".mysqli_error($connection)." in file ".__FILE__." at line ".__LINE__);
    }

