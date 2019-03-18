<?php
	$title = "Select Customer";
	require_once "./template/header.php";
	require_once "./template/meun.php";
	require_once 'connection.php';
	$query = "select * from customers";
	$result = mysqli_query($connection, $query);
	if($result){
		$record = [];
		while ($row = mysqli_fetch_assoc($result)) {
			$record[] =  $row;
		}
	}
	else {
		errorMove("D3 ".mysqli_error($connection)." in file ".__FILE__." at line ".__LINE__);
	}
	
	$table = "
		<table class='table table-bordered'>
			<tr>
				<td>id</td> <td>bame</td> <td>address</td> <td>city</td> <td>state</td> <td>zip</td> 
			</tr>
	";
	if($record){
		foreach ($record as $aRecord) {
			$table .= "<tr>
					<td>{$aRecord['id']}</td> <td>{$aRecord['name']}</td> 
					<td>{$aRecord['address']}</td> <td>{$aRecord['city']}</td> 
					<td>{$aRecord['state']}</td> <td>{$aRecord['zip']}</td> 
				</tr>";
		}
	}
	$table .= "</table>";
?>
<!DOCTYPE html>
<html>
	<head>
		<title>List of customer</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	</head>
	<body>
		<?php echo $table; ?>
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	</body>
</html>
<?php
require_once "./template/footer.php";
?>