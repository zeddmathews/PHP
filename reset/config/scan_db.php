<?php
	include('./database.php');
	try
	{
		$connection = new PDO("$DB_CON", $DB_USER, $DB_PASSWORD);
		$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$search = $connection->prepare("SELECT * FROM users WHERE id = 1");
		$search->execute();
		$user = $search->fetchAll();
		echo $user;
	}
	catch (PDOException $e)
	{
		echo "It Dun Fucked up: ".$e->getMessage();
	}
// 	if ($search->execute(array($_POST['username']))) {
// 	$data = $search->fetchAll(PDO::FETCH_ASSOC);
// 	$firstRow = $data[0];
// 	if (password_verify($_POST['login_pswd'], $firstRow['password'])) {
// 		$_SESSION['UserId'] = $data[0]['UserId'];
//     }
// }
?>