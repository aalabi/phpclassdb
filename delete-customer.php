<?php
	$title = "Delete Customer";
	require_once "./template/header.php";
	require_once "./template/meun.php";
    require_once 'connection.php';
?>
    <body>
      <div class ="container">
        <h3 class ="text-center p-2">Delete A Customer</h3>
	      <form action ="process-delete-customer.php" class="form col-6 offset-3 p-1" method="post">
            <div class ="form-group">
              <label for ="labelId">ID No.</label>
              <input type ="text" class ="form-control" name ="id" id ="lableId" placeholder ="Enter the ID Number of the customer you want to delete">
            </div>
          <button type ="submit" name ="send" class ="btn btn-primary">Submit</button>
        </form>
      </div>
  </body>
<?php
  require_once "./template/footer.php";
  ?>