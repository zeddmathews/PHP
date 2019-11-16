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
  <div id="pop">
		<div id="popupLogin">
			<form action="#" id="login-form" method="post" name="login-form">
				<img id="close" src="./user/resources/camera_logo.jpg" onclick="hide_log()">

				<input id="login-email" name="email" placeholder="Email" type="email">
				<input id="login-password" name="password" placeholder="Password" type="password">

				<a href="javascript:%20check_empty()" id="submit">Send</a>
			</form>
		</div>
	</div>
		<button id="Register" onclick="show_reg()">Register</button>
		<button id="Login" onclick="show_log()">Login</button>
		<button type="button"><a href="./user/php/feed.php">Feed</a></button>
</body>
</html>