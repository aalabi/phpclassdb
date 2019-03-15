<?php
	require 'Notification.php';
	$Noter = new Notification($_GET['name'], $_GET['email'], $_GET['phone']);
	if(true){
		$output = $Noter->displayContent();
		//mail($_GET['email'], "Reg cool", "Reg cool");
		//SmsSender($_GET['phone'], "Reg cool");
	}
	else {
		$output = $_GET['name'] ." your reg failed";
		//mail($_GET['email'], "Reg fail", "Reg fail");
		//SmsSender($_GET['phone'], "Reg fail");
	}
?>
<h1>Output</h1>
<?php echo $output;?>