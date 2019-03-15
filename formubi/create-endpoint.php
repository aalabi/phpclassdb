<?php
	//https://alabiansolutions.com/api/?un=$username&pw=$password&id=$id
	//https://alabiansolutions.com/api/?un=buhari&pw=buhari&id=1	
	$students = [
		['id'=>1, 'firstname'=>'Alabi', 'surname'=>'Adebayo'],
		['id'=>2, 'firstname'=>'Nuhu', 'surname'=>'Nuhu'],
		['id'=>3, 'firstname'=>'Bashir', 'surname'=>'Bashir']
	];
	
	$loginTable = [
		['username'=>'buhari', 'password'=>'buhari'],
		['username'=>'atiku', 'password'=>'atiku']
	];
	
	$response = 404; $result = null;
	if(isset($_GET['un']) && isset($_GET['pw'])){
		$username = $_GET['un'];
		$password = $_GET['pw'];
		$login = false;
		foreach ($loginTable as $record) {
			if ($record['username'] == $username && $record['password']== $password){
				$login = true;
				break;
			}
		}
		
		if($login){
			if(isset($_GET['id'])){
				$found = false;
				foreach ($students as $aStudent) {
					if($aStudent['id'] == $_GET['id']){
						$response = 200;
						$result = json_encode($aStudent);
						$found = true;
						break;
					}
				}
				if(!$found){
					$response = 404; 
				}
			}
			else {
				$response = 404;
			}
		}
		else {
			$response = 401;
		}
		
	}
	else {
		$response = 401;
	}
	http_response_code($response);
	echo json_encode($result);
