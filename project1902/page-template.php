<?php
	require_once 'config.php';
	$title = "Page name";
	$icon = "fa-dashboard";
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
					Page content goes here
        </div>
      </div>
    </div>
    <?php require_once 'templates/footer.php'; ?>
</div>
</div>
</body>
	<?php require_once 'templates/footer-js.php'?>
</html>
