<?php 
  require_once 'connection.php';
  require_once 'template/head.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Home</title>
  </head>  
  <body>
    <div class="container-fluid">
      <div class="row"> 
      <div class="col-4 text-primary"><h1>Menu</h1></div> 
    </div>
    <nav class="navbar navbar-expand-sm">
      <ul>
        <li class="nav-item ">
          <a class="nav-link" href="select-customer.php">View customer</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="create-customer.php">Create customer</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="delete-customer.php">Delete customer</a>
        </li>
      </ul>
    </nav>
    </div>
  </body>
</html>
