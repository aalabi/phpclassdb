<?php 
	require_once 'connection.php';
	require_once 'template/head.php';

	if(isset($_POST['submit'])){
		$name = $_POST['name'];
		$address = $_POST['address'];
		$city = $_POST['city'];
		$state = $_POST['state'];
		$zip = $_POST['zip'];
		$query = "insert into customers (name, address, city, state, zip) value ('$name', '$address', '$city', '$state', '$zip')";
		$result = mysqli_query($connection, $query);

		if($result){
			echo "<div class='col-3 offset-1 bg-success'>Customer " .$name." has been successfully added</div>";
		}
		else {
			errorMove("D3 ".mysqli_error($connection)." in file ".__FILE__." at line ".__LINE__);
		}

	}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Create</title>
  </head>  
  <body>
  	<div class="container">
	  	<div class="row">
	  		<div class="col-4"><h1>Create Customer</h1></div>
	  	</div>
	    <form method="post">
	    	<div class="form-group">
	    	    <div class="col-4">
	    	      <input type="text" name="name" class="form-control" placeholder="Name" >
	    	    </div><br/>
	    	    <div class="col-4">
	    	      <input type="text" name="address" class="form-control" placeholder="Address" >
	    	    </div><br/>
	    	    <div class="col-4">
	    	      <input type="text" name="city" class="form-control" placeholder="City" >
	    	    </div><br/>
	    	    <div class="col-4">
	    	      <input type="text" name="state" class="form-control" placeholder="State" >
	    	    </div><br/>
	    	    <div class="col-4">
	    	      <input type="text" name="zip" class="form-control" placeholder="Zip" >
	    	    </div><br/>
	    	    <div class="col-4">
	    	    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
	    	 </div>
	    </form><br/>
    </div>
   <?php require_once 'template/footer.php'?>
  </body>
</html>