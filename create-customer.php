<?php
	$title = "Create Customer";
	require_once "./template/header.php";
	require_once "./template/meun.php";
?>
<body>
<div class="container">
<h3 class="text-center p-2">Delete A Customer</h3>
	<form action="process-create-customer.php" class="form col-6 offset-3 p-1" method="post">
  <div class="form-group">
    <label for="labelName">Name</label>
    <input type="text" class="form-control" name="name" id="lableName" placeholder="Enter your name">
  </div>
  <div class="form-group">
    <label for="labelAddress">Address</label>
    <input type="text" class="form-control" name="address" id="labelAddress" placeholder="Address">
  </div>
  <div class="form-group">
	<label for="labelCity">City</label>
    <input type="text" class="form-control" name="city" id="lableCity" placeholder="Enter your city">
	</div>
	<div class="form-group">
    <label for="labelState">State</label>
    <input type="text" class="form-control" name="state" id="labelState" placeholder="Enter your state">
  </div>
  <div class="form-group">
    <label for="labelZip">Zip</label>
    <input type="text" class="form-control" name="zip"id="labelZip" placeholder="Enter your zip">
  </div>
  <button type="submit" name="send" class="btn btn-primary">Submit</button>
</form>
</div>
</body>