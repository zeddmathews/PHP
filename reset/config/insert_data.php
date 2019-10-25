<?php
	include('database.php');
	session_start();
	try {
		$connection = new PDO("mysql:host=$my_server;dbname=$my_db", $my_user, $my_pswd) or die("Could not connect X.X");
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
		$sql = "INSERT INTO MyGuests(firstname, lastname, username, email, password) VALUES ('{$_POST[firstname]}', '{$_POST[lastname]}', '{$_POST[username]}', '{$_POST[email]}', '{$_POST[password_1]}'), '{$_POST[encrypt]}'";
		$connection->exec($sql);
		echo "Register successful";
	}
	catch(PDOException $e) {
		echo $sql . "<br>" . $e->getMessage();
	}
	$conn = null;
?> 