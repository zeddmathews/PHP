<?php
	session_start();
	require('database.php');
	$connection = new PDO($DB_CON, $DB_USER, $DB_PASSWORD);
	$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>