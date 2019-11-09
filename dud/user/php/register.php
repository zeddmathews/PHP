<?php
	//register/login redirection
	require('../../config/database.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel ="stylesheet" href="../css/bulma.min.css">
	<title>Register</title>
</head>
<body>
	<nav class="navbar" role="navigation" aria-label="main navigation">
  <div class="navbar-brand">

    <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
    </a>
  </div>

  <div id="navbarBasicExample" class="navbar-menu">
    <div class="navbar-start">
      <a class="navbar-item">
        Home
      </a>

      <a class="navbar-item">
        Documentation
      </a>

      <div class="navbar-item has-dropdown is-hoverable">
        <a class="navbar-link">
          More
        </a>

        <div class="navbar-dropdown">
          <a class="navbar-item">
            About
          </a>
          <a class="navbar-item">
            Jobs
          </a>
          <a class="navbar-item">
            Contact
          </a>
          <hr class="navbar-divider">
          <a class="navbar-item">
            Report an issue
          </a>
        </div>
      </div>
    </div>

    <div class="navbar-end">
      <div class="navbar-item">
        <div class="buttons">
          <a class="button is-primary">
            <strong>Sign up</strong>
          </a>
          <a class="button is-light">
            Log in
          </a>
        </div>
      </div>
    </div>
  </div>
</nav>
	<form class="register-form" action="../../dev/register.php" method="post">
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
		<button type="button"><a href="../../index.php">Login</a></button>
		<button type="button"><a href="./reset_account.php">Forgotten password?</a></button>
	</form>
	<script>
		document.addEventListener('DOMContentLoaded', () => {

		// Get all "navbar-burger" elements
		const $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);

		// Check if there are any navbar burgers
		if ($navbarBurgers.length > 0) {

		// Add a click event on each of them
		$navbarBurgers.forEach( el => {
			el.addEventListener('click', () => {

			// Get the target from the "data-target" attribute
			const target = el.dataset.target;
			const $target = document.getElementById(target);

			// Toggle the "is-active" class on both the "navbar-burger" and the "navbar-menu"
			el.classList.toggle('is-active');
			$target.classList.toggle('is-active');

			});
		});
		}

		});
	</script>
</body>
</html>