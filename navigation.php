<ul class="nav">
<nav class="navbar navbar-expand-sm navbar-dark justify-content-center" style="background-color: #333333;">
		<ul class="navbar-nav">
			<li class="nav-item">
				<a class="nav-link" href="index.php">Home</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="artist.php">Artist Timer</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="about.php">About</a>
			</li>
			  <?php
			    if(isset($_SESSION['userid'])) {
			      echo '<li style="float:right;"><a class="nav" href="logout.php">Log Out</a></li>';
			    }
			  ?>
		</ul>
	</nav>
