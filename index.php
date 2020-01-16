<?php
	require "session.php";
//place title of page between
?>

<html>
	<head>
		<title>Home Page</title>
		<link href="css/style.css" rel="stylesheet" type="text/css">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<div class="homepagecontainer">
		<h1 class="homepagetitle">Taffy Kingdom</h1>
	<?php
		require "navigation.php";
	?>
	</head>
	<body>
		<div class="homepagecontainer">
			<div style="background-color:lightgray; height:60%; overflow: hidden;">

				<p style="margin: 10px; padding: 20px; float: left; width:30%;">
					Welcome,<br><br> 
					this is a project that will mostly revolve around EO content for the time being. Our goal is to make EO more fun by providing an accurate artist time,
					 and giving new players the opportunity to discover the game by providing an easy download link and guides that give them fundamental knowledge. We are hoping this will eventually evolve into creating our own game/games. <br><br>We appreciate your support!
				</p>

				<div style="float: left; width: 30%; /*background-color: red;*/">
					<img src="images/little_palm.png" alt="Taffy STAYZ litt" style="margin-left: 38%;width:60%; height:auto; /*background-color: blue;*/">
				</div>

				<div style="margin: 10px; float: right; width:33%;">
					<?php
						include 'login.php';
					?>
				</div>
			</div>
		</div>
		<?php
			require "footer.php";
		?>
	</body>
</html>