<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel ="stylesheet" href="./hide.css">
	<script src="../../dev/js/camera.js"></script>
	<title>Feed</title>
	<style>
		.img
		{
			/* border: 10px solid red; */
			/* background: no-repeat; */
			/* background-size: cover; */
			height: 50vh;
			width: 25vw;
		}
	</style>
</head>
<body onload="init();">
	<h3>Display (preferably) pretty shit</h3>
	<form action="../../dev/upload_image.php" method="post" enctype="multipart/form-data">
		<input type="file" name="img_up" id="img_up">
		<input type="submit" name="submit" value="Upload Image">
	</form>
	<?php
		require('../../config/pdo_connection.php');
		$stmt = $conn->prepare("SELECT * FROM images ORDER BY id DESC");
		$stmt->execute();
		while ($imgs = $stmt->fetch(PDO::FETCH_ASSOC))
		{
		?>
			<div class = "img" style = "background: url(../../dev/saved/<?php echo $imgs['imagename'] ?>);"></div>
		<?php
		}
	?>
	<button onclick="startCam();">Camera</button>
	<button onclick="stopCam();">Off</button>
	<button onclick="takeSnap();">Capture</button>
	<button onclick="saveSnap();">Save</button>
	<video autoplay = true id="video"></video>
	<canvas id="myCanvas" width="300" height="300"></canvas>

</body>
</html>