<?php
	session_start();
	require('./database.php');

	// Build DB
	try {
		$sql = "CREATE DATABASE IF NOT EXISTS $DB_NAME";
		$conn = new PDO($DB_DSN, $DB_USER, $DB_PASSWORD);
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$conn->exec($sql);
		echo "Shit functions<br>";
	}
	catch (PDOException $e){
		echo $sql ."<br>". $e->getMessage();
	}

	// Build Table 'Users'
	try {
		require_once('../dev/pdo_connection.php');
		$sql = "CREATE TABLE IF NOT EXISTS users (
			id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
			firstname VARCHAR(100) NOT NULL,
			lastname VARCHAR(100) NOT NULL,
			username VARCHAR(100) NOT NULL UNIQUE,
			email VARCHAR(100) NOT NULL UNIQUE,
			encrypt VARCHAR(200) NOT NULL,
			verified BOOLEAN NOT NULL,
			notifications BOOLEAN NOT NULL,
			token VARCHAR(100) NOT NULL UNIQUE
		)";
		$conn->exec($sql);
		echo "More shit functions<br>";
	}
	catch (PDOException $e){
		echo $sql ."<br>". $e->getMessage();
	}

	// Build table 'Images'
	try {
		require_once('../dev/pdo_connection.php');
		$sql = "CREATE TABLE IF NOT EXISTS images (
			id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
			imagename VARCHAR(200) NOT NULL,
			created VARCHAR(200) NOT NULL
		)";
		$conn->exec($sql);
		echo "Extremely functional shit";
	}
	catch (PDOException $e){
		echo $sql ."<br>". $e->getMessage();
	}
	
	header("Location: ../index.php");
?>