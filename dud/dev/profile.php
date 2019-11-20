<?php
	require('../../config/pdo_connection.php');

	try {

	}
	catch(PDOException $e) {
		echo 'Can you login better?'."<br>".$e->getMessage();
	}
?>