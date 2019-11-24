<?php
	session_start();
	session_unset();
	session_destroy();
	if (!isset($_SESSION)) {
		echo "You have logged out";
	}
	else {
		echo "Dafuq";
	}
	header("Location: ../index.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Kay bye</title>
</head>
<body>
	
</body>
</html>