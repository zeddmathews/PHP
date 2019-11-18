<?php
	// session_start();
	// require('../config/database.php');
	require('./pdo_connection.php');

	try {
		$token = $_GET['token'];
		$match = $conn->prepare("SELECT verified FROM users where token = ?");
		$match->execute(array($match));
		if ($match->fetchColumn() === 1) {
			echo 'Your account has already been verified';
		}
		else {
			$update = "UPDATE users SET verified=1 WHERE token=:token";
			$stmt = $conn->prepare($update);
			$stmt->bindParam(':token', $token);
			$stmt->execute();
			$match = $conn->prepare("SELECT verified FROM users where token = ?");
			$match->execute(array($match));
			if ($match->fetchColumn === 1) {
				echo'Account verified';
			}
			else {
				echo 'Oops';
			}
		}
	}
	catch(PDOException $e) {
		echo 'Error: <br>'. $e->getMessage(); 
	}
?>