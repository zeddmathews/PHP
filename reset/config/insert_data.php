<?php
	session_start();
	ini_set('display_error', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
	require('database.php');
	require('connection.php');
	
	try {
		// $connection = new PDO($DB_CON, $DB_USER, $DB_PASSWORD) or die("Could not connect X.X");
		// $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$password1 = trim(htmlspecialchars($_POST['password_1']));
		$password2 = trim(htmlspecialchars($_POST['password_2']));
		$lemail = trim(htmlspecialchars($_POST['email']));
		$firsty = trim(htmlspecialchars($_POST['firstname']));
		$lasty = trim(htmlspecialchars($_POST['lastname']));
		$usery = trim(htmlspecialchars($_POST['username']));

		$upp = preg_match('@[A-Z]@', $password1);
		$low = preg_match('@[a-z]@', $password1);
		$num = preg_match('@[0-9]@', $password1);
		$spec = preg_match('@[^\w]@', $password1);
		if (!$upp || !$low || !$num || !$spec || strlen($password1) < 8) {
			echo ('Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.');
		}
		else {
			echo 'Strong password.';
		}
		if ($password1 != $password2) {
			die("Passwords do not match");
		}
		// $edit = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
		if (filter_var($lemail, FILTER_VALIDATE_EMAIL)) {
			echo ("$_POST[email] is a valid email address");
		}
		else {
			die ("$_POST[email] is not a valid email address");
		}
		$encrypt = password_hash($password1, PASSWORD_BCRYPT);
		$token = md5($_POST['username']);
		$sql = "INSERT INTO users(firstname, lastname, username, email, encrypt, verified, notifications, token)
		VALUES (:firsty, :lasty, :usery, :lemail, :encrypt, false, false, :token)";
		$stmt = $connection->prepare($sql);
		$stmt->bindParam(':firsty', $firsty);
		$stmt->bindParam(':lasty', $lasty);
		$stmt->bindParam(':usery', $usery);
		$stmt->bindParam(':lemail', $lemail);
		$stmt->bindParam(':encrypt', $encrypt);
		$stmt->bindParam(':token', $token);
		$msg = 'Please click the following link to activate your account:\n
				http://localhost:8080/php/reset/back-end/confirmation.php?email='.$lemail.'token='.$token;
		$_SESSION['email'] = $lemail;
		$_SESSION['token'] = $token;
		mail($lemail, 'Confirmation', $msg);
		$stmt->execute();
		echo "<br> An email with a verification link has been sent to you.";
		header("Location: ../index.php");
	}
	catch (PDOException $e) {
		echo $sql . "<br>" . $e->getMessage();
	}
	$connection = null;
?> 