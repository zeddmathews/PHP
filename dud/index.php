<?php
	
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="./user/css/test.css">
  <script src="./dev/js/form_popup.js"></script>
	<title>Camagru Home</title>
</head>
<body style="overflow:hidden;">
	<h1>Welcome to Camagru</h1>
	<div id="pop2">
		<div id="popupRegister">
			<form action="#" id="register-form" method="post" name="register-form">
				<h2>Create an account</h2>

				<img id="close" src="./user/resources/close_button.png" onclick="hide_reg()">

				<hr>

				<input id="reg-name" name="reg-name" placeholder="Name" type="text" required>

				<br>

				<input id="reg-lname" name="reg-lname" placeholder="Surname" type="text" required>

				<br>

				<input id="reg-uname" name="reg-uname" placeholder="Password" type="password" required>

				<br>

				<input id="reg-email" name="reg-email" placeholder="Email" type="email" required>

				<br>

				<input id="reg-p1" name="reg-p1" placeholder="Password" type="password" required>

				<br>

				<input id="reg-p2" name="reg-p2" placeholder="Confirm Password" type="password" required>

				<a href="javascript:%20if_empty()" id="submit">Register</a>
			</form>
		</div>
	</div>
	<div id="pop">
		<div id="popupLogin">
			<form action="#" id="login-form" method="post" name="login-form">
				<img id="close" src="./user/resources/close_button.png" onclick="hide_log()">

				<hr>

				<input id="login-email" name="email" placeholder="Email" type="email" required>

				<br>

				<input id="login-password" name="password" placeholder="Password" type="password" required>

				<a href="javascript:%20if_empty()" id="submit">Login</a>
			</form>
		</div>
	</div>
		<button id="Register" onclick="show_reg()">Register</button>
		<button id="Login" onclick="show_log()">Login</button>
		<button type="button"><a href="./user/php/feed.php">Feed</a></button>
</body>
</html>