<?php
	include('../config/scan_db.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="../front-end/home.css">
	<title>Camagru</title>
</head>
<body>
	<form>
		<label>Username/E-mail</label>
		<input type="text" name="login" required>

		<br>

		<label>Password</label>
		<input type="password" name="login_pswd" required>

		<br>

		<button type="submit" name="Login">Login</button>
		
		<br>

		<label>Need an account?</label>
		<button type="button"><a href="./register.html">Register</a></button>
		<button type="button"><a href="./reset_account.html">Forgotten password?</a></button>
	</form>
</body>
</html>