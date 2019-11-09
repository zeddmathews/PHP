<?php
	require('../config/database.php');
	require('./pdo_connection.php');

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

	if ($firsty)
	if (!$upp) {
		echo 'No uppercase letters';
	}
	if (!$low) {
		echo 'No lowercase letters';
	}
	if (!$num) {
		echo 'No numbers';
	}
	if (!$spec) {
		echo 'No special characters';
	}
	if (strlen($password1) < 8) {
		echo 'Password too short';
	}
?>