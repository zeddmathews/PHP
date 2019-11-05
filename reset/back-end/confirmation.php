<?php
	session_start();
	require('../config/database.php');
	require('../config/connection.php');

	// get token from email url
	$email = $_GET['email'];
	$token = $_GET['token'];
	if ($email == $_SESSION['email'] && $token == $_SESSION['token']) {
		$update = "UPDATE users SET verified=0 WHERE token=:token";
		$stmt = $connection->prepare($update);
		
		echo 'You have successfully registered your account';
	}
?>