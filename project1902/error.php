<?php
	require_once 'config.php';
	$title = "System Error";
	$icon = "fa-warning";
	
	$msg = "Error 000";
	if(isset($_SESSION['error'])){
		foreach ($_SESSION['error'] as $key => $value) {
			$msg = "Error $key";
		}
		@mail('awaritomachris@gmail.com', "Error Message", "$key: $value");
		$file = fopen("error.txt", "a+");
		fputs($file, "$key: $value". $_SERVER['REMOTE_ADDR'] ." ". date("g:i a jS F Y").PHP_EOL);
	}
	
	require_once 'templates/head.php';
?>
<body>
<div class="wrapper">
	<?php require_once "templates/side-bar.php" ?>
	<div class="main-panel">
    <?php require_once 'templates/masthead.php'; ?>
    <div class="content">
      <div class="container-fluid">
        <div class="row">
					<?php echo $msg; ?>
        </div>
      </div>
    </div>
    <?php require_once 'templates/footer.php'; ?>
</div>
</div>
</body>
	<?php require_once 'templates/footer-js.php'?>
</html>
