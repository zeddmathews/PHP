<?php
	require('database.php');
	try {
		$username = $_POST['username'];
		$password = $_POST['password'];
		// $email = $_POST['username'];
		$connection = new PDO($DB_CON, $DB_USER, $DB_PASSWORD);
		$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$query = "SELECT * FROM users WHERE username = :username AND password = :password";
		$search = $connection->prepare($query);
		$search->bindParam(':username', $username);
		$search->bindParam(':password', $password);
		$search->execute();
		$count = $search->rowCount();
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