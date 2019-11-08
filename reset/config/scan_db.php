<?php
	session_start();
	require('database.php');
	require('connection.php');
	try {
		$username = $_POST['username'];
		$encrypt = $_POST['password'];
		// $email = $_POST['username'];
		$query = $connection->prepare("SELECT encrypt FROM users WHERE username = :username");
		// $search = $connection->prepare($query);
		$query->bindParam(':username', $username);
		// $search->bindParam(':email', $email);
		// $search->bindParam(':encrypt', $encrypt);
		$query->execute(array($username));
		if (password_verify($encrypt, fetchColumn()))
		{
			$count = $search->rowCount(); //preg_match
			if ($count > 0) {
				$_SESSION["username"] = $username;
				header("Location: ../back-end/home.php");
			}
			else {
				echo "Wrong stuffses";
			}
		}
		else
			echo "No works";
	}
	catch (PDOException $e) {
		echo "It Dun Fucked up: ".$e->getMessage();
	}
	$connection = null;
?>