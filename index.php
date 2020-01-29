<?php
	require "session.php";
//place title of page between
?>
<!DOCTYPE html>
<html>
<head>
	<title>TK Homepage</title>
  	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<!--   	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script> -->
  	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
</head>
<body>

	<header class="container-fluid text-light text-center justify-content-center d-flex" style="height:100px; background-color:silver;">
		<h1 class="my-auto text-dark">Taffy Kingdom</h1>
	</header>

	<?php
		require "navigation.php";
	?>

	<section class="container-fluid d-flex justify-content-between" style="height:700px; background-color:silver;" id="homepagecontainer">
		<!-- col-sm-# should total to less than 12 inside class="row" -->
		<article class="col-sm-4 d-flex h-100">
			<p class="align-items-center d-flex">
				Welcome,<br><br> 
				this is a project that will mostly revolve around EO content for the time being. Our goal is to make EO more fun by providing an accurate artist time,
				 and giving new players the opportunity to discover the game by providing an easy download link and guides that give them fundamental knowledge. We are hoping this will eventually evolve into creating our own game/games. <br><br>We appreciate your support!
			</p>
		</article>

		<div class="h-100" id="imagecontainer">
			<img src="images/little_palm.png" class="my-auto d-block h-75" 
			style="image-rendering: -moz-crisp-edges; 
			image-rendering: -webkit-crisp-edges; 
			image-rendering: pixelated; 
			image-rendering: crisp-edges;" 
			alt="Taffy STAYZ litt!!!">
		</div>

		<div class="col-sm-3">
			<?php
				include 'login.php';
			?>
		</div>
		
	</section>

	<?php
		require "footer.php";
	?>

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
</body>
</html>