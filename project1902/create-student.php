<?php
	require_once 'config.php';
	require_once 'functions.php';
	$title = "Create Student";
	$icon = "fa-user";
	
	$error = "";
	if(isset($_SESSION['dataError'])){
		if(is_array($_SESSION['dataError'])){
			$errorMsg = "";
			foreach ($_SESSION['dataError'] as $errorValue) {
				$errorMsg .= "$errorValue<br/>";
			}
		}
		else {
			$errorMsg = $_SESSION['dataError'];
		} 
		$error = "
			<div class='row'>
	  		<div class='alert alert-danger col-md-6 col-md-offset-3'>
	    		$errorMsg
	    	</div>
	  	</div>
		";
		unset($_SESSION['dataError']);
	}
	
	$success = "";
	if(isset($_SESSION['success'])){
		if(is_array($_SESSION['success'])){
			$successMsg = "";
			foreach ($_SESSION['success'] as $successValue) {
				$successMsg .= "$successValue<br/>";
			}
		}
		else {
			$successMsg = $_SESSION['success'];
		} 
		$success = "
			<div class='row'>
	  		<div class='alert alert-success col-md-6 col-md-offset-3'>
	    		$successMsg
	    	</div>
	  	</div>
		";
		unset($_SESSION['success']);
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
      	<?php echo $error; echo $success;?>
        <div class="row">
					<form action="create-student-processor.php" method="post">
						<div class="form-group row">
							<label class="col-md-1">
								Name	
							</label>
							<div class="col-md-8">
								<input class="form-control" type="text" name="name" />	
							</div>							
						</div>
						
						<div class="form-group row">
							<label class="col-md-1">
								Email	
							</label>
							<div class="col-md-8">
								<input class="form-control" type="email" name="email" required/>	
							</div>							
						</div>
						
						<div class="form-group row">
							<label class="col-md-1">
								Phone	
							</label>
							<div class="col-md-8">
								<input class="form-control" type="text" name="phone" required>	
							</div>							
						</div>
						
						<div class="form-group row">
							<label class="col-md-1">
								Gender	
							</label>
							<div class="col-md-8">
								<input class="" type="radio" value="male" name="gender" required> - Male
								
								<input class="" type="radio" value="female" name="gender" required> - Female
							</div>							
						</div>
						
						<div class="form-group row">
							<label class="col-md-1">
								Address	
							</label>
							<div class="col-md-8">
								<textarea required class="form-control" name="address" style="height: 100px;"></textarea>
							</div>							
						</div>												
						<div>
							<button class="btn btn-success" type="submit" value="create" name="create"/>Create</button>
						</div>
					</form>
        </div>
      </div>
    </div>
    <?php require_once 'templates/footer.php'; ?>
</div>
</div>
</body>
	<?php require_once 'templates/footer-js.php'?>
</html>