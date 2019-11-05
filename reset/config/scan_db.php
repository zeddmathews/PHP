<?php
	session_start();
	require('database.php');
	require('connection.php');
	try {
		$username = $_POST['username'];
		$encrypt = $_POST['password'];
		// $email = $_POST['username'];
		// $connection = new PDO($DB_CON, $DB_USER, $DB_PASSWORD);
		// $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$query = "SELECT * FROM users WHERE username = :username AND encrypt = :encrypt";
		$search = $connection->prepare($query);
		$search->bindParam(':username', $username);
		$search->bindParam(':encrypt', $encrypt);
		$search->execute();
		$count = $search->rowCount(); //preg_match
		if ($count > 0) {
			$_SESSION["username"] = $username;
			header("Location: ../back-end/register.php");
		}
		else {
			echo "Wrong stuffses";
		}
	}
	catch (PDOException $e) {
		echo "It Dun Fucked up: ".$e->getMessage();
	}
	$connection = null;
?>