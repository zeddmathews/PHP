<?php
	require('../config/pdo_connection.php');

	$lemail = trim(htmlspecialchars($_POST['email']));
	$encrypt = trim(htmlspecialchars($_POST['password']));
	try {
		$stmt = $conn->prepare("SELECT username FROM users WHERE email = :lemail AND encrypt = :encrypt");
		$stmt->bindParam(':lemail', $lemail);
		$stmt->bindParam(':encrypt', $encrypt);
		$stmt->execute();
		echo 'Probably worked';
		header("Location: ../user/php/feed.php");
	}
	catch (PDOException $e) {
		echo 'Nice'. $e->getMessage;
	}
?>