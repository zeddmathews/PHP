<?php
	include('insert_data.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Register</title>
	<link rel="stylesheet" href="../front-end/home.css">
</head>

<body>
	<form action = "../config/insert_data.php" method = "POST">
		<label>Name</label>
		<input type="text" name="firstname" required>

		<br>

		<label>Surname</label>
		<input type="text" name="lastname" required>

		<br>

		<label>Username</label>
		<input type="text" name="username" required>

		<br>

		<label>E-mail</label>
		<input type="text" name="email" required>

		<br>

		<label>Password</label>
		<input type="password" name="password_1" required>

		<br>

		<label>Confirm password</label>
		<input type="password" name="password_2" required>

		<br>
		
		<button type="submit" name="Register">Register</button>

		<br>

		<label>Already have an account?</label>
		<button type="button"><a href="./home.html">Login</a></button>
		<button type="button"><a href="./reset_account.html">Forgotten password?</a></button>
	</form>
</body>

</html>