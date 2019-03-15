<?php
  require_once 'Db.php';
	$Db = new Db("localhost", "todelete", "root", "");
	$students = $Db->getData("student", ['firstname', 'surname'], ['id'=>2]);
	var_dump($students);
	