<?php
	session_start();
	$msg = "Error 000";
	if(isset($_SESSION['error'])){
		foreach ($_SESSION['error'] as $key => $value) {
			$msg = "Error $key";
		}
		@mail('awaritomachris@gmail.com', "Error Message", "$key: $value");
		$file = fopen("error.txt", "a+");
		fputs($file, "$key: $value". $_SERVER['REMOTE_ADDR'] ." ". date("g:i a jS F Y").PHP_EOL);
	}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>form</title>
	</head>
	<body>
		<?= $msg ?>
	</body>
</html>
