<?php
	require('../config/database.php');
	require('./pdo_connection.php');

	$ditch = "DROP DATABASE IF EXISTS $DB_NAME";
	$conn->exec($ditch);
	echo 'Kay byyyyeee';
?>