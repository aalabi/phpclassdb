<?php
	array(); //empty array
	array(0=>"Paul", 1=>"Peter", 2=>"Kehinde");
	array("Paul", "Peter", "Kehinde");

	[]; //empty array
	[0=>"Paul", 1=>"Peter", 3=>"Kehinde"];
	["Paul", "Peter", "Kehinde"];

	$students = ["Paul", "Peter", "Kehinde"]; //can be place in a variable
	$students[3] = "Taiwo";
	$students[] = "Alabi";
	//echo $students[0];
	//echo $students[3];
	
	//echo $students;
	for ($i=0; $i < count($students) ; $i++) { 
		echo $students[$i];
	}
	
	$score = ['english'=>70, 'maths'=>80, 'physics'=>60];
	
	$paul = ['english'=>70, 'maths'=>80, 'physics'=>60];
	$kehinde = ['english'=>90, 'maths'=>45, 'physics'=>65];
	$peter = ['english'=>67, 'maths'=>90, 'physics'=>62];
	$paul['chemistry'] = 67;
	$paul['english'] = 90;
	$kehinde['chemistry'] = 78;
	$peter['chemistry'] = 53;
	
	foreach ($paul as $key => $value) {
		echo "Paul score $value in $key <br/>";
	}
	
	[
		70,
		80,
		60
	];
	
	$scores= [
		0=>['name'=>'paul', 'english'=>70, 'maths'=>80, 'physics'=>60],
		1=>['name'=>'kehinde','english'=>90, 'maths'=>45, 'physics'=>65],
		2=>['name'=>'peter','english'=>67, 'maths'=>90, 'physics'=>62]
	];
	
	$table="
		<table border = 1>
			<tr>
				<td>Name</td> <td>English</td> <td>Maths</td> <td>Physics</td>
			</tr>";
			
	for ($i=0; $i < count($scores); $i++) {
		$scores[$i]; 
		$table.="
			<tr>
				<td>".$scores[$i]['name']."</td> 
				<td>".$scores[$i]['english']."</td>
				<td>".$scores[$i]['maths']."</td>
				<td>".$scores[$i]['physics']."</td>
			</tr>";
	}	

	$table.="</table>";

	echo $table;	
	
?>
