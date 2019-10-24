<?php
	include('database.php');
	try {
		$connection = new PDO("mysql:host=$my_server", $my_user, $my_pswd);
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
			email VARCHAR(100),
			password VARCHAR(100) NOT NULL
			)";
		echo "Table created successfully<br>";
		$connection->exec($sql);
		$sql = "INSERT INTO MyGuests(firstname, lastname, username, email, password) VALUES ('{$_POST[firstname]}', '{$_POST[lastname]}', '{$_POST[username]}', '{$_POST[email]}', '{$_POST[password]}')";
		$connection->exec($sql);
	}
	catch(PDOException $e) {
		echo $sql . "<br>" . $e->getMessage();
	}
	$conn = null;
?>