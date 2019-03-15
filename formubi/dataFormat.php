<?php
	$json = "
		{
			'name':'alabi',
			'age':43,
			'gender':'male'
		}
	";
	
	$xml = "
		<student>
			<name>Alabi</name>
			<age>43</age>
			<gender>male</gender>
		</student>
	";

	require_once 'Db.php';
	$Db = new Db("localhost", "todelete", "root", "");
	$students = $Db->getData("student", ['firstname', 'surname'], ['id'=>2]);
	$studenJSON = json_encode($students);
	var_dump($studenJSON);
	
	$studentJSONArray = json_decode($studenJSON,true);
	$studentJSONObject = json_decode($studenJSON);
	
	var_dump($studentJSONArray, $studentJSONObject);