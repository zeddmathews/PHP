<?php
	ini_set('display_error', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
	require('database.php');
	session_start();
	try {
		$connection = new PDO($DB_CON, $DB_USER, $DB_PASSWORD) or die("Could not connect X.X");
		$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		if ($_POST['password_1'] != $_POST['password_2']) {
			die("Passwords do not match");
		}
		// $edit = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
		if (filter_var($_POST[email], FILTER_VALIDATE_EMAIL)) {
			echo ("$_POST[email] is a valid email address");
		}
		else {
			die ("$_POST[email] is not a valid email address");
		}
		$encrypt = password_hash($_POST['password1'], PASSWORD_BCRYPT);
		$sql = "INSERT INTO users(firstname, lastname, username, email, encrypt, verified, notifications) VALUES ('{$_POST[firstname]}', '{$_POST[lastname]}', '{$_POST[username]}', '{$_POST[email]}', '$encrypt', false, false)";
		$msg = "Please click the following link to activate your account";
		mail("{$_POST[email]}", Confirmation, $msg);
		$connection->exec($sql);
		echo "<br> An email with a verification link has been sent to you.";
		header("Location: ../back-end/home.php");
	}
	catch (PDOException $e) {
		echo $sql . "<br>" . $e->getMessage();
	}
	$connection = null;
?> 