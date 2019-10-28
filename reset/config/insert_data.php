<?php
	ini_set('display_error', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
	include('database.php');
	session_start();
	try {
		$connection = new PDO($DB_CON, $DB_USER, $DB_PASSWORD) or die("Could not connect X.X");
		$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		if ($_POST['password_1'] != $_POST['password_2'])
			die("Passwords do not match");
		if (filter_var($_POST[email], FILTER_VALIDATE_EMAIL)) {
			echo ("$_POST[email] is a valid email address");
		}
		else {
			die ("$_POST[email] is not a valid email address");
		}
		$encrypt = md5($_POST['password1']);
		$sql = "INSERT INTO users(firstname, lastname, username, email, password, encrypt, verified, notifications) VALUES ('{$_POST[firstname]}', '{$_POST[lastname]}', '{$_POST[username]}', '{$_POST[email]}', '{$_POST[password_1]}', '$encrypt', false, false)";
		$msg = "Please click the following link to activate your account";
		mail("{$_POST[email]}", Confirmation, $msg);
		$connection->exec($sql);
		echo "An email with a verification link has been sent to you.";
	}
	catch (PDOException $e) {
		echo $sql . "<br>" . $e->getMessage();
	}
	$connection = null;
?> 