<?php
	//Connect to db server
	$connection = mysqli_connect('localhost', 'root', '');
	if($connection){
		echo "Connected to Db Server successfully<br/>";
		//select database
		if(mysqli_select_db($connection, 'todelete2')){
			echo "Selected a Db successfully<br/>";
			//run query
			$query = "select * from student where id =  3";
			$result = mysqli_query($connection, $query);
			if($result){
				//result if any
				while ($row = mysqli_fetch_assoc($result)) {
					var_dump($row);
				}
			}
			else {
				echo mysqli_error($connection)."<br/>";
			}
		}
		else {
			echo mysqli_error($connection)."<br/>";
		}
	}
	else {
		echo mysqli_error($connection);
	}
