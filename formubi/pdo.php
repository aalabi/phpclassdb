<?php
	try{
		$db_conn = new PDO('mysql:host=localhost;dbname=todelete','root', '');
		
		$sql = "INSERT INTO student(firstname, surname, address, gender, email, phone) 
			VALUES (:firstname, :surname, :address, :gender, :email, :phone)";
		
		$stmt = $db_conn->prepare($sql);
		// perform query
		$students = [
			['firstname'=>'Nuhu', 'surname'=>'Nuhu', 'address'=>'Mubi', 'gender'=>'male', 'email'=>'nuhu@gmail.com', 'phone'=>'08012345671'],
			['firstname'=>'Bashir', 'surname'=>'Bashir', 'address'=>'Mubi', 'gender'=>'male', 'email'=>'bashir@gmail.com', 'phone'=>'08012345671']
		];
		
		foreach ($students as $aStudent) {
			//$stmt->execute($aStudent);	
		}
		
		
		$sql = 'SELECT * FROM student';
		
		$stmt = $db_conn->prepare($sql);
		// perform query
		$stmt->execute();
		
		$student = $stmt->fetchAll($db_conn::FETCH_ASSOC);
		
		var_dump($student);
	}
	catch(PDOException $e){
		echo "Sorry there is system glitch our engineers are working on it";
	}
   
	 