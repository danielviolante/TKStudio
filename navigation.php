<nav class="navbar navbar-expand-sm navbar-dark d-flex" style="background-color: #333333;">
	<ul class="navbar-nav l-auto">
		<li class="nav-item">
			<a class="nav-link" href="index.php">Home</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="artist.php">Artist Timer</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="about.php">About</a>
		</li>
	</ul>
	<ul class="navbar-nav ml-auto">
		<?php
		    if(isset($_SESSION['userid'])) {
		      echo '
		      	<li class="nav-item">
					<a class="nav-link" href="logout.php">Log Out</a>
				</li>
		      ';
		    }
		?>
	</ul>
</nav>
