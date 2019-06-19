<?php
	require_once 'config.php';
	$title = "Home";
	$icon = "fa-home";
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
					Home content coming soon
        </div>
      </div>
    </div>
    <?php require_once 'templates/footer.php'; ?>
</div>
</div>
</body>
	<?php require_once 'templates/footer-js.php'?>
</html>
