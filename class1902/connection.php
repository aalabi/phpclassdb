<?php
	$link = mysqli_connect("localhost", "root", "");
	if($link){
		echo "connected to db server successful<br/>";
		if(mysqli_select_db($link, "class1902")){
			echo "db selected<br/>";
			//C-insert, R-select, U-upate, D-delete
			//$query = "DELETE FROM customers WHERE id = 1";
			//$query = "UPDATE customers SET name='alabi' WHERE id = 2";
			//$query = "INSERT INTO customers(id, name, address, city, state, zip) 
			//VALUES (97,'Buhari Aisha','Aso Rock','Abuja','Abj', '2342')";
			$query = "select * from customers where state = 'TX'";
			$result = mysqli_query($link, $query);
			if($result){
				$noRows = mysqli_num_rows($result);
				if($noRows){
					echo "<table border = 1>";
					while($row = mysqli_fetch_assoc($result) ) {
						echo "
							<tr>
								<td>".$row['id']."</td> 
								<td>".$row['name']."</td>
								<td>".$row['address']."</td>
								<td>".$row['city']."</td>
								<td>".$row['state']."</td>
							</tr>
						";
					}
					echo "</table>";
				}
				else {
					echo "no record matahes your criteria";
				}
			}
			else {
				echo "Query failed".mysqli_error($link);
			}
		}
		else {
			echo "db selection failed DB Error: ".mysqli_error($link)."<br/>";
		}
	}
	else {
		echo "connected to db server failed. DB Error: ".mysqli_error($link);
	}
