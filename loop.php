<?php
	// echo
	// "<div>
			// <h2>1 Times</h2>
			// <p>
				// 1 X 1 = 1<br />
				// 1 X 2 = 2<br />
				// 1 X 3 = 3<br />
				// 1 X 4 = 4<br />
				// 1 X 5 = 5<br />
				// 1 X 6 = 6<br />
			// </p>
		// </div>";
		
		//1 X figure = answer
		
		// $answer = 1*1;
		// echo "1 X 1 = ". $answer."<br/>";
// 		
		// $answer = 1*2;
		// echo "1 X 2 = ". $answer."<br/>"; 
		
		//while
		$no = 1;
		while($no<=6){
			$answer = 1*$no;
			echo "1 X $no = ". $answer."<br/>";
			++$no;
		}
		
		echo "<br/>";
		//do while
		$no = 1;
		do{
			$answer = 1*$no;
			echo "1 X $no = ". $answer."<br/>";
			++$no;
		}while($no<=12);
		
		echo "<br/>";
		//for 
		for ($i=1; $i <=24 ; $i++) { 
			$answer = 1*$i;
			echo "1 X $i = ". $answer."<br/>";
		}
		
		//foreach
