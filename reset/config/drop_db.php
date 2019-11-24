<?php
	require('database.php');
	require('connection.php');

	$ditch = "DROP DATABASE IF EXISTS $DB_NAME";
	$connection->exec($ditch);
	echo 'Kay byyyyeee';
?>