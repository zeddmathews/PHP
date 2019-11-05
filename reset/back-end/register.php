<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="../front-end/home.css">
	<title>Register</title>
</head>

<body>
	<!-- <div class="main">
		<div class="article">
			<h1 class="wordmark margin">Camagru</h1>
			<div class="form">
				<form class="register-form" action="../config/insert_data.php" method="post">
					<h2 class="register-reason">Sign up to see photos and videos from your friends<h2>
					<div class="data">
						<div class="data2">
							<input class="data3" placeholder="Email" type="text">
						</div>
					</div>
					<div class="data">
						<div class="data2">
							<input class="data3" placeholder="First Name" type="text">
						</div>
					</div>
					<div class="data">
						<div class="data2">
							<input class="data3" placeholder="Surname" type="text">
						</div>
					</div>
					<div class="data">
						<div class="data2">
							<input class="data3" placeholder="Username" type="text">
						</div>
					</div>
					<div class="data">
						<div class="data2">
							<input class="data3" placeholder="Password" type="password">
						</div>
					</div>
					<div class="data">
						<div class="data2">
							<input class="data3" placeholder="Re-Password" type="password">
						</div>
					</div>
					<div>
						<div class="">
							<button class="">Sign up</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div> -->

	<form class="register-form" action="../config/insert_data.php" method="post">
		<label>Name</label>
		<br>
		<input type="text" name="firstname" required>

		<br>

		<label>Surname</label>
		<br>
		<input type="text" name="lastname" required>

		<br>

		<label>Username</label>
		<br>
		<input type="text" name="username" required>

		<br>

		<label>E-mail</label>
		<br>
		<input type="email" name="email" required>

		<br>

		<label>Password</label>
		<br>
		<input type="password" name="password_1" required>

		<br>

		<label>Confirm password</label>
		<br>
		<input type="password" name="password_2" required>

		<br>
		
		<button type="submit" name="Register">Register</button>

		<br>

		<label>Already have an account?</label>
		<button type="button"><a href="../index.php">Login</a></button>
		<button type="button"><a href="./reset_account.php">Forgotten password?</a></button>
	</form>
</body>

</html>