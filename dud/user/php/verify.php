<?php
	session_start();
	require('../../config/database.php');
	require('../../dev/pdo_connection.php');

	$email = $_GET['email'];
	$token = $_GET['token'];
	// password_verify($token, $_SESSION['token']);
	if ($email == $_SESSION['email'] && $token == $_SESSION['token']) {
		$update = "UPDATE users SET verified=0 WHERE token=:token";
		$stmt = $conn->prepare($update);
		$stmt->bindParam(':token', $token);
		$stmt->execute();
		echo 'You have successfully registered your account';
	}
	else {
		echo 'Be better';
	}
?>