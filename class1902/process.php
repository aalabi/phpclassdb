<?php
	if(isset($_GET['submit']) && $_GET['submit'] == 'submit'){
		if(empty($_GET['name']))$error['name'] = "Name is compulsory";
		if(empty($_GET['age'])) $error['age'] = "Age is compulsory";
		if(!isset($_GET['status'])) $error['marital status'] = "Marital status is compulsory";
		if(!isset($_GET['school'])) $error['school'] = "Marital status is compulsory";
	} 	
	else {
		header("Location: form.html");
	}
	if(isset($error)){
		foreach ($error as $key => $value) {
			echo "<strong>".ucfirst($key).":</strong> $value<br/>";
		}
		echo "<a href='form.html'>Go BACK</a>";
	}
	
	
	echo "I am inside process.php";
	//var_dump($_GET, $_POST, $_REQUEST);