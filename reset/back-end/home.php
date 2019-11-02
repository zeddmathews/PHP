<!DOCTYPE html>
<html lang="en">
<head>
	<link href="https://fonts.googleapis.com/css?family=Titillium+Web&display=swap" rel="stylesheet">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="../front-end/home.css">
	<title>Camagru</title>
</head>
<body>
	<form class="login" action="../config/scan_db.php" method="post">
		<label>Username/E-mail</label>
		<br>
		<input type="text" name="username" required>

		<br>

		<label>Password</label>
		<br>
		<input type="password" name="password" required>
		<br>
		<button class="login_btn" type="submit" name="Login">Login</button>
		
		<br>

		<label>Need an account?</label>
		<br>
		<button type="button"><a href="./register.php">Register</a></button>
		<button type="button"><a href="./reset_account.php">Forgotten password?</a></button>
		<button type="button"><a href="./logout.php">Logout</a></button>
	</form>
</body>
</html>