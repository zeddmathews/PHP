<?php
	session_start();
	require('../config/database.php');
	$conn = new PDO($DB_CON, $DB_USER, $DB_PASSWORD);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>