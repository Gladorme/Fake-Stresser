<!DOCTYPE html>
<html>
	<head>
		<title>Fake Stresser - Stress</title>
		<meta charset="utf-8">
		<meta name="description" content="Free Booter for everybody ! Because we all prefer when it's free ! UDP only: 300 sec max">
		<meta name="author" content="MisterSanglad">
		<meta name="keywords" content="Free, Booter, UDP, 300, seconds">
		<link rel="stylesheet" href="css/style.css">
	</head>

	<body>
		<header>
			<h1>Fake Stresser</h1>
		</header>
		<div class="main">
		<?php 
		$host = $_GET["host"];
		$port = $_GET["port"];
		$time = $_GET["time"];
		?>
			<!-- Rajouter cooldown -->
			<p>Thanks you for using our services! The stress has been send to <?php echo $host; ?>:<?php echo $port; ?> for <?php echo $time; ?> seconds!</p>
		</div>

		<footer>
			Powered by MisterSanglad
			<!-- Stresser non fonctionnel afin de m'améliorer avec le HTML -->
		</footer>
	</body>
</html>
