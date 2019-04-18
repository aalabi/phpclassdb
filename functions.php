<?php
	$paul = ['english'=>70, 'maths'=>80, 'physics'=>60];
	$kehinde = ['english'=>90, 'maths'=>45, 'physics'=>65];
	$peter = ['english'=>67, 'maths'=>90, 'physics'=>62];
	$paul['chemistry'] = 67;
	$paul['english'] = 90;
	$kehinde['chemistry'] = 78;
	$peter['chemistry'] = 53;
	
		
	scores();
	echo "<br/>";
	scoresII($paul, "Paul");
	echo "<br/>";
	scoresII($peter);
	//multiplicationTable();
	
	
	function multiplicationTable(){
		for ($i=1; $i <=24 ; $i++) { 
			$answer = 1*$i;
			echo "1 X $i = ". $answer."<br/>";
		}
	}

	function scores(){
		$score = [
		"English" => 40,
		"Maths" => 50,
		"Geography" => 80
		];
		foreach($score as $subject => $value){
		echo $subject.": ".$value . "<br>";
		}
	}

	function scoresII($score, $owner="Unknow Student"){
		echo $owner."<br/>";		
		foreach($score as $subject => $value){
			echo $subject.": ".$value . "<br>";
		}
	}
	
	
	echo "<h1>".add(10, 20)."</h1>";

	
	function add($val1, $val2){
		global $val1;
		$val1 = 10;
		$summation = $val1 + $val2;
		return $summation;	
	}	
	
	copy("formubi/Db.php", "Db.php");
	
	$handle = fopen("log.txt", "a+");
	if($handle){
		fputs($handle, "Activties logged at ".date("jS F'y h:m:s").PHP_EOL);
	}
	
	echo $val1;
		
	
	
	