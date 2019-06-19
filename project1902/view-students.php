<?php
	require_once 'connection.php';
	require_once 'functions.php';
	$title = "View Students";
	$icon = "fa-users";
	$table = "<table class='table table-striped, table-bordered'>
							<tr>
								<td>ID</td> <td>Name</td> <td>Email</td> <td>Picture</td>
								<td>Gender</td> <td>Phone</td> <td>Address</td> <td>Date of Admission</td>
								<td></td>
							</tr>";
	$query = "SELECT * from registration WHERE authority = 'student'";
	if($result = mysqli_query($connection, $query)){
		if(mysqli_num_rows($result)){
			while($row = mysqli_fetch_assoc($result) ) {
				$table .="
					<tr>
								<td>{$row['id']}</td> <td>{$row['name']}</td> <td>{$row['email']}</td> 
								<td><img style='width:50px;height:50px;' src='".URL."assets/passport/{$row['passport']}'/></td>
								<td>".ucfirst($row['gender'])."</td> <td>{$row['phone']}</td> 
								<td>{$row['address']}</td> <td>".date("jS F Y", strtotime($row['date_registered']))."</td>
								<td>
									<a class='btn btn-sm btn-info' href='".URL."edit-student.php?id={$row['id']}'>Edit</a>
									<form action='delete-student.php' method='post'>
										<button class='btn btn-sm btn-info' value='{$row['id']}' name='delete'>Delete</button>
									</form>
								</td>
							</tr>
				";
			}
		}
		else {
			$table .= "
							<tr>
								<td colspan='9'>No Student has been admitted</td> 
							</tr>";
		}
	}
	else {
		goToErrorPage(300, "Query Error ".mysqli_error($connection));
	}
							
	$table .="</table>";	
	
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
      	<?php echo $success;?>
        <div class="row">
					<div class="col-md-12">
						<?php echo $table;?>
					</div>
        </div>
      </div>
    </div>
    <?php require_once 'templates/footer.php'; ?>
</div>
</div>
</body>
	<?php require_once 'templates/footer-js.php'?>
</html>