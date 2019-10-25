<?php
	include('./database.php');
	session_start();
	try {
		$connection = new PDO("mysql:host=$my_server", $my_user, $my_pswd) or die("Could not connect X.X");
		$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "CREATE DATABASE $my_db";
		$connection->exec($sql);
		echo "Database created successfully<br>";
	}
	catch(PDOException $e) {
		echo $sql . "<br>" . $e->getMessage();
	}
	try {
		$connection = new PDO("mysql:host=$my_server;dbname=$my_db", $my_user, $my_pswd);
		$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "CREATE TABLE MyGuests (
			id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
			firstname VARCHAR(100) NOT NULL,
			lastname VARCHAR(100) NOT NULL,
			username VARCHAR(100) NOT NULL,
			email VARCHAR(100) NOT NULL,
			password VARCHAR(100) NOT NULL
			)";
		echo "Table created successfully<br>";
		$connection->exec($sql);
	}
	catch(PDOException $e) {
		echo $sql . "<br>" . $e->getMessage();
	}
?>