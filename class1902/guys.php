<?php
  'alabi';
  3;
	true;
	$name = "alabi";
	$name = "adebayo";
	$name = "kolade";
	$name = "nife";
	$person = ['alabi', 43, true];
	$personName = 'alabi';
	$personAge = 43;
	$isPersonMarried = true;  
	
	echo $personName;
	
	echo $person[0];
	
	$anotherPerson = ['Buhari'];
	$anotherPerson = [73];	
	
	$governorPerson[] = 'Sanwo Olu';
	$governorPerson[] = 45;
	$governorPerson[] = true;
	
	var_dump($person, $anotherPerson, $governorPerson);
	
	$person = ['name'=>'alabi', 'age'=>43, 'isMarried'=>true];
	
	var_dump($person);
	
	function getName(){
		global $person;
		var_dump($person);
	}
	
	
	getName();
	
