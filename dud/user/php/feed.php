<?php
	//gallery
	require('../../config/database.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel ="stylesheet" href="./hide.css">
	<script src="../../dev/js/camera.js"></script>
	<title>Feed</title>
</head>
<body onload="init();">
	<h3>Display (preferably) pretty shit</h3>
	<button onclick="startCam();">Start</button>
	<button onclick="stopCam();">Stop</button>
	<button onclick="takeSnap();">Capture</button>
	<canvas id="myCanvas" width="300" height="300"></canvas>
	
</body>
</html>