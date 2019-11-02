<?php
	require('database.php');
	session_start();
	try {
		$sql = "CREATE DATABASE IF NOT EXISTS $DB_NAME";
		$connection = new PDO($DB_DSN, $DB_USER, $DB_PASSWORD) or die("Could not connect X_X");
		$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$connection->exec($sql);
		echo "Database created successfully<br>";
	}
	catch(PDOException $e) {
		echo $sql . "<br>" . $e->getMessage();
	}
	try {
		$connection = new PDO($DB_CON, $DB_USER, $DB_PASSWORD);
		$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "CREATE TABLE IF NOT EXISTS users (
			id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
			firstname VARCHAR(100) NOT NULL,
			lastname VARCHAR(100) NOT NULL,
			username VARCHAR(100) NOT NULL,
			email VARCHAR(100) NOT NULL,
			encrypt VARCHAR(200) NOT NULL,
			verified BOOLEAN NOT NULL,
			notifications BOOLEAN NOT NULL
			)";
		echo "Table created successfully<br>";
		header("Location: ../back-end/register.php");
		$connection->exec($sql);
	}
	catch(PDOException $e) {
		echo $sql . "<br>" . $e->getMessage();
	}
	$connection = null;
?>