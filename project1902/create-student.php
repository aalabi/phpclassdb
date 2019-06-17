<?php
	require_once "config.php";
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Create Student</title>
	</head>
	<body>
		<h1>Create Student</h1>
		<?php require_once "templates/menu.php"?>
		<form action="create-student-processor.php" method="post">
			<div>
				Name
				<input type="text" name="name">
			</div>
			<div>
				Email
				<input type="email" name="email">
			</div>
			<div>
				Phone
				<input type="text" name="phone">
			</div>
			<div>
				Address
				<textarea name="address"></textarea>
			</div>
			<div>
				<input type="submit" value="create" name="submit"/>
			</div>
		</form>
	</body>
</html>
