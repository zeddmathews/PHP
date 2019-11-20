<?php
	require('../config/pdo_connection.php');
	$lemail = trim(htmlspecialchars($_POST['email']));
	$pass = trim(htmlspecialchars($_POST['password']));
	try {
		$stmt = $conn->prepare("SELECT username FROM users WHERE email = :lemail AND encrypt = :pass");
		$stmt->bindParam(':lemail', $lemail);
		$stmt->bindParam(':encrypt', $pass);
		$stmt->execute();
		$_SESSION['logged_in'] = $lemail;
		header("Location: ../user/php/feed.php");
	}
	catch (PDOException $e) {
		echo 'Nice'. $e->getMessage();
	}
?>