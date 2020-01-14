<ul class="nav">
  <li  class="nav"><a class="nav" href="index.php">Home</a></li>
  <li class="nav"><a class="nav"  href="artist.php">Artist Time</a></li>
  <li class="nav"><a class="nav"  href="about.php">About</a></li>
  <?php
  if(isset($_SESSION['userid'])){
  echo '
  <li style="float:right;"><a class="nav" href="logout.php">Log Out</a></li>
  
  ';
  }
  ?>
</ul>
